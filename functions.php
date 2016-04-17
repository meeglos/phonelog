<?php

/**
 * @Author: miguel
 * @Date:   2016-04-13 22:54:01
 * @Last Modified by:   miguel
 * @Last Modified time: 2016-04-13 22:54:25
 */

/**
 * @param $carry
 * @param $item
 * @return string
 */
	function array_concat($carry, $item)
	{
	    $carry .= $item . ' ';
	    return $carry;
	}

	function mysqlInsertArray($table, $response_array)
	{
		$db = Database::getInstance();
        $mysqli = $db->getConnection();

        $fields = getArrayKeys($response_array);
        $values = getArrayValues($response_array);
		$query = "INSERT INTO `" . $table . "`($fields) VALUES " . implode (', ', $values);

		if (!$query) {
			$message = mysqli_error();
			die($message);
		}
        $final = $mysqli->query($query) or exit(mysqli_error());

        if ($final) {
            return "OK";
        }

	}

    function getArrayKeys($array)
    {
        $resultKeys = array();
        foreach($array as $sub) {
            $resultKeys = array_merge($resultKeys, $sub);
        }
        return implode(', ', array_keys($resultKeys));
    }

    function getArrayValues($array)
    {
        $resultValues = array();
        foreach($array as $sub) {
            $resultValues[] = '("' . $sub['call_date'] . '", "' . $sub['client_id'] . '", "' . $sub['call_lapse'] . '", "' . $sub['comment'] . '")';
        }
        return $resultValues;
    }

    function getTotalCalls() {
        $db = Database::getInstance();
        $mysqli = $db->getConnection();

        $query_GTC = "SELECT count(*) as total FROM logs";
        $result_gtc = $mysqli->query($query_GTC) or exit(mysqli_error());
        if ($result_gtc->num_rows > 0) {
            while ($row = $result_gtc->fetch_assoc()) {
                echo $row["total"];
            }
        }
    }