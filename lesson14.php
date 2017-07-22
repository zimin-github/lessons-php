<?php
// Двумерные массивы

// $array = ['1','2','3'];

// $x = 0;

// for ($j = 0; $j < count($array); $j++) {
// 	 if ($j % 2 === 0) {
// 	 	$x = $array[$j];
// 	 }
// }



// // ----------------------
// function putVarieble($x) {
// 	return $x = (int)$x;
// }
// putVarieble($x);



// // ----------------------
// $massive = [];

// for ($i = 0; $i < 100; $i++) {
// 	 $massive [] = $i * $x;
// 	 echo $massive[$i]."<br>";
// }


$array2 = ["one" => 1, "two" => 2, "three" => 3];

$massive2 = [];

	$i = 0;
	while($i < 100) {
		$massive2[] = $i * $array2["three"];
		echo $massive2[$i]."<br>";
		$i++;
	}







?>