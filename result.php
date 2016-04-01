<?php
/**
 * @Author: miguel
 * @Date:   2016-03-31 00:15:30
 * @Last Modified by:   miguel
 * @Last Modified time: 2016-04-01 22:18:57
 */

	if($_POST) {
		$mylog = $_POST['inputTextarea1'];
		$result = array();

		$input = preg_replace("/((\r?\n)|(\r\n?))/", '**', $mylog);
		$pieces = explode('**', $input);
		foreach($pieces as $part) {
		    $line = explode(' ', $part);
		    foreach ($line as $value) {
		    	$total = sizeof($line);
		    	$data4 = null;
		    	$data1 = $line[0] . ' ' . $line[1];
		    	$data2 = $line[2];
		    	$data3 = $line[3];
		    	for ($i=4; $i < $total; $i++) { 
		    		$data4 .= $line[$i] . ' ';
		    	}

		    	$result = array(
		    				'date' => $data1, 
		    				'process_id' => intval($data2),
		    				'process_time' => $data3,
		    				'comments' => trim($data4)
		    				);
		    }
	    	var_dump($result);
		}    
	}
?>


