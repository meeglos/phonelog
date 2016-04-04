<?php
/**
 * @Author: miguel
 * @Date:   2016-03-31 00:15:30
 * @Last Modified by:   miguel
 * @Last Modified time: 2016-04-04 21:51:34
 */
include('db_connect.php.inc');

	if($_POST) {
		$mylog = $_POST['inputTextarea1'];
		$result = array();
		$other_result = "";
		$input = preg_replace("/((\r?\n)|(\r\n?))/", '**', $mylog);
		$pieces = explode('**', $input);
		foreach($pieces as $part) {
		    $line = explode(' ', $part);
		    foreach ($line as $value) {
		    	$total = sizeof($line);
		    	$data4 = null;
		    	$data1 = $line[0] . ' ' . $line[1];
		    	$data2 = $line[2];
		    	$data3 = str_replace("'", ":",$line[3]);
		    	for ($i=4; $i < $total; $i++) { 
		    		$data4 .= $line[$i] . ' ';
		    	}

		    	$result = array(
		    				'call_date' => $data1, 
		    				'client_id' => intval($data2),
		    				'call_lapse' => $data3,
		    				'comment' => trim($data4)
		    				);
		    }
		    	$other_result .= "('" . $data1 . "'," . intval($data2). ",'" . $data3. "','" . trim($data4) . "'),";

		}    
		$db = Database::getInstance();
	    $mysqli = $db->getConnection(); 

	    	$daata = substr($other_result,0,-1);
	    	$sql = "INSERT INTO logs (call_date, client_id, call_lapse, comment)  values ";
	    	$sql .= $daata;

	    	echo $sql;
	
	    	$mysqli->query($sql) or exit(mysql_error());
	    
	}
?>


