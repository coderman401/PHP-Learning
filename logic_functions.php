<?php

	// Function for check string is plainedrome or not
	function palindrome($string) {
		$rev = '';
		if(is_string($string)) {
			for ($j = strlen($string) - 1; $j >= 0; $j--){
				$rev .= $string[$j];
			}
			if(strtolower($string) == strtolower($rev)) {
				echo '<br>Given String is Plaindrome.<br>';
			} else {
				echo '<br>Given String is not plainedrome<br>';
			}
		} else {
			echo '<br>Enter Valid String.<br>';
			echo 'given value is : ' . gettype($string);
		}
	}

	// Function for check no is armstrong or not
	function armstrong($number) {
		$sum = 0;
		$temp = $number;
		if(is_int($temp)) {
			while ($temp > 0) {
				$reminder = $temp % 10;
				$sum = $sum + ($reminder*$reminder*$reminder);
				$temp = intval($temp / 10);
			}
			if($sum == $number) {
				echo '<br>Given Number is Armstrong.<br>';
			} else {
				echo '<br>Given Number is not Armstrong<br>'.$sum;
			}
		} else {
			echo '<br>Enter Valid Number.<br>';
			echo 'given value is : ' . gettype($string);
		}
	}
?>