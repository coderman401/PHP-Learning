<?php
/** Recusrsion Example */
function factorial($no) {
	$fact = 1;
	if($no == 0 || $no ==1) {
		return $fact;
	} else {
		while($no > 1) {
			$fact = $fact * $no;
			$no -= 1;
			factorial($no);
		}
		return $fact;
	}
}
echo 'factorial of given no is : '.factorial(16);
?>