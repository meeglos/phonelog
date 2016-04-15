<?php

/**
 * @Author: miguel
 * @Date:   2016-04-13 22:54:01
 * @Last Modified by:   miguel
 * @Last Modified time: 2016-04-13 22:54:25
 */


	function array_concat($carry, $item)
	{
	    $carry .= $item . ' ';
	    return $carry;
	}

	function mysql_insert_array($table, $response_array)
	{
		foreach ($response_array as $field => $value) {
			$fields[] = '' . $field . '';
			$values[] = "'" . mysqli_real_escape_string($value) . "'";
		}
		$field_list = implode(',', $fields);
		$value_list = implode(', ', $values);


		$query = "INSERT INTO '" . $table . "' (" . $field_list . ") VALUES (" . $value_list . ")";
		if (!$query) {
			$message = mysqli_error();
			die($message);
		}

//		if ($response_array[0] == 1) {
//			$table = "payments_received";
//			mysql_insert_array($table, $response_array);
//		}
	}
?>	