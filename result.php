<?php
/**
 * @Author: miguel
 * @Date:   2016-03-31 00:15:30
 * @Last Modified by:   miguel
 * @Last Modified time: 2016-04-14 00:56:50
 */
include('db_connect.php.inc');
include('functions.php');

	if($_POST) {
		$mylog = $_POST['inputTextarea1'];
		$input = preg_replace("/((\r?\n)|(\r\n?))/", '**', $mylog);
		$pieces = explode('**', $input);
		foreach($pieces as $part) {

			$a = explode(' ', $part);
		$b = array(2, 1, 1);
			foreach ($a as $value) {
				$i = 0;
				foreach ($b as $num_elem) {
					$output[] = rtrim(array_reduce(array_slice($a, $i, $num_elem), "array_concat"));
					$i += $num_elem;
				}

				$output[] = rtrim(array_reduce(array_slice($a, array_sum($b), count($a)), "array_concat"));
// var_dump($a);
			}
			$result = array($output);
// var_dump($result);
// exit();
// 
		}
		
/*		$db = Database::getInstance();
	    $mysqli = $db->getConnection(); 

	    	$daata = substr($other_result,0,-1);
	    	$sql = "INSERT INTO logs (call_date, client_id, call_lapse, comment)  values ";
	    	$sql .= $daata;

	    	echo $sql;
	
	    	$mysqli->query($sql) or exit(mysql_error());*/
	    
	}
				var_dump($result);
?>


