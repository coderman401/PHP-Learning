<?php

$startDateManually = '01-09-2017';
$endtDateManually =  '04-07-2018';

$sYear = date('Y',strtotime($startDateManually));
$eYear = date('Y',strtotime($endtDateManually));

$sMonth = date('m',strtotime($startDateManually));
$eMonth = date('m',strtotime($endtDateManually));
$arrayMonthData = array();
if($sYear == $eYear){

	for($i=$sMonth; $i<=$eMonth; $i++)
	{
		$m= str_pad($i,2,0,STR_PAD_LEFT);
		$arrayMonthData[$m] =  array();
	}
}else{
	for($i=$sMonth; $i<=12; $i++)
	{
		$m= str_pad($i,2,0,STR_PAD_LEFT);
		$arrayMonthData[$m] =  array();
	}

	for($i=1; $i<=$eMonth; $i++)
	{
		$m= str_pad($i,2,0,STR_PAD_LEFT);
		$arrayMonthData[$m] =  array();
	}
}

$temp = $arrayMonthData;
echo '<pre>';
print_r($temp);

?>