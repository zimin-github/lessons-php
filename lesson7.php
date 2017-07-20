<?php
// Логически операции
$x = 15.4;
$y = -5.9;
$z = 15.4;
$bool_1 = $x > $y;
$bool_2 = $x < $y;
$bool_3 = $x >= $z;
$bool_4 = $x < $z;
$bool_5 = $x == $z;

echo "bool_1 =". $bool_1."<br>";
echo "bool_2 =". $bool_2."<br>";
echo "bool_3 =". $bool_3."<br>";
echo "bool_4 =". $bool_4."<br>";
echo "bool_5 =". $bool_5."<br>";

$bool = !($x > $y);
echo 'Переменная bool ='. $bool;
echo "<br>";
$bool = ($x < $y) || ($z == $z);
echo 'Переменная bool =' . $bool;
echo "<br>";
$bool = ($x < $y) ^ ($z == $z);
echo 'Переменная bool =' . $bool;
echo "<br>";
$bool = ($x < $y) ^ ($z < $z);
echo 'Переменная bool =' . $bool;
echo "<br>";

?>