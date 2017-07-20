<?php
// Массивы
$list = [3,3,3,3];

	function getAverageValue($array) {
		$summa = 0;
		for ($i =0; $i < count($array); $i++){
			$summa = $summa + $array[$i];
		}
		$average = $summa / count($array);
		return $average;
	}

	echo getAverageValue($list);

?>