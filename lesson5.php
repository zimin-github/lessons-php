<?php
	//Арифметические операции
	$x = 20;
	$y = 15;
	$summa = $x + $y;
	$diff = $x - $y;
	$mult = $x * $y;
	$div = $x / $y;
	$rem = $x % $y;

	echo "Сумма $x и $y = $summa <br>";
	echo "Разность $x и $y = $diff <br>";
	echo "Произведение $x и $y = $mult <br>";
	echo "Деление $x и $y = $div <br>";
	echo "Остаток при делении $x и $y = $rem <br>";
	echo "<br>";

	$x = $x + 10;
	echo "x = ".$x."<br>";
	$x += 10;
	echo "x = ".$x."<br>";
	$x /= 10;
	echo "x = ".$x."<br>";
	echo "<br>";
	$x++;
	echo "x = ".$x."<br>";
	$x--;
	echo "x = ".$x."<br>";
	$x -=3;
	echo "x = ".$x."<br>";
?>