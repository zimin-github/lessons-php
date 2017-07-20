<?php 
//Условный оператор
	$x = 7.6;
	$y = -15;
	if ($x + $y > 0) echo "Сумма $x и $y больше нуля";
	else echo "Сумма $x и $y меньше или равна нулю";

	echo "<br>";

	if ($x * $y < 0) {
		echo "Произведение $x и $y меньше нуля";
		echo "<br>";
	}

	if (($x * $y < 0) && ($x == 7.6)) echo "Произведение $x и $y меньше нуля И $x = 7.6"; 

	echo "<br>";

	$x = 5;
	$y = 5;
	if ($x < $y) echo "$x < $y";
	elseif ($x > $y) echo "$x > $y";
	else echo "$x = $y";
?>