<?php
	/*
	*	23:41 31/03/2016 37854691 2'24 Trans. Facturacion
	*	0:09 01/04/2016 96451873 12'10 Acceso al correo ONO	
	*/

	function array_concat($carry, $item)
	{
	    $carry .= $item . ' ';
	    return $carry;
	}

	$a = array("0:09", "01/04/2016", "96451873", "12'10", "Acceso", "al", "correo", "ONO", "|", "Trans.", "facturacion");
	$b = array(2, 1, 1);
	$i = 0;
	
	foreach ($b as $num_elem) {
			$output[] = rtrim(array_reduce(array_slice($a, $i, $num_elem), "array_concat"));
			$i += $num_elem;
	}

	$output[] = rtrim(array_reduce(array_slice($a, array_sum($b), count($a)), "array_concat"));
	
	var_dump($output);
?>