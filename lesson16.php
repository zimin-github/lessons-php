
<?php
// item 1
$x = 5;
	function mySumm($p1, $p2) {
		$summ = $p1 + $p2;
		global $x;
		$x = $summ;

}

//item 2
function getFunck($p1,$p2){
	mySumm($p1,$p2);
	$a = $GLOBALS['x'];
	if ($a % 2 === 0) {
		static $id = 0;
		$id++;
		echo "Число было четным ".$id."<br>";
	}
	$a *= 2;
	global $x;
	$x = $a;
}


echo "<br>";
getFunck(5,5);
getFunck(2,5);
getFunck(8,5);
getFunck(15,5);
getFunck(15,5);
getFunck(55,5);
getFunck(60,5);
echo $x;

echo "<br>";


function testCount(){
	static $i = 0;
	$i++;
	echo "Вызвана функция i раз: ". $i ."<br>";
}

for ($a = 0; $a < 30; $a++){
	 testCount();
}
?>