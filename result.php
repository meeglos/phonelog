<?php

/**
 * @Author: miguel
 * @Date:   2016-03-31 00:15:30
 * @Last Modified by:   miguel
 * @Last Modified time: 2016-03-31 23:38:24
 */

	if($_POST) {
		$mylog = $_POST['inputTextarea1'];
		// echo $mylog;

		$input = $mylog;
		$input = preg_replace("/((\r?\n)|(\r\n?))/", ',', $input);
		$pieces = explode(',', $input);
		foreach($pieces as $part) {
		  print($part) . '<br>';
		}
	}
?>


