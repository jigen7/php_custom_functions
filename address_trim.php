<?php

/*
Paolo Marco Manarang
2016-03-08 
Desc : Function to only display only the first occurance of the search key, removing the previous comma group 
*/

$wordArr[] = "23rd Ave, Plaza Building, Makati City";
$wordArr[] = "4th street , 23rd Ave, Plaza Complex, Makati City";

$searchKey = "23rd";
$finalWord = array();
foreach($wordArr as $words ){
	$explodeWord = array();
	$explodeWord = explode(",", $words);

	foreach ($explodeWord as $key => $exp){

		if (strpos($exp, $searchKey) !== false) { //true
			$finalWord[] = implode(",", $explodeWord);
			
		}else{
			unset($explodeWord[$key]);
		}

	}
}

print_r($finalWord);

?>