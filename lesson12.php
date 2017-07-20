<?php
//Функции
	function getSum ($x, $y) {
			$sum = $x + $y;
			return $sum;
		}

		echo "<br>";

		function printSum($x, $y) {
			$sum = getSum($x,$y);
			echo "Сумма $x и $y равна $sum <br>";
		}

	printSum(100,100);

	function hello() {
		echo "hello";
	}

	hello();

	for($i = 0; $i < 100; $i++) {
		 if ($i % 10 === 0) echo "<br>";
		 hello();
}


?>