<?php

	// Program to reverse a string
	$str = 'Hello';
	$revFor = $revWhile = '';
	$i = strlen($str) - 1;
	while ( $i >= 0) {
		$revWhile .= $str[$i];
		$i--;
	}
	for ($j = strlen($str) - 1; $j >= 0; $j--){
		$revFor .= $str[$j];
	}
	echo 'Original String is : ' . $str . '<br>';
	echo 'Using While loop : ' . $revWhile . '<br>';
	echo 'Using For loop : ' . $revFor;


	
?>