
<?php

$massive = array(array(11,12,13,14,15),array(23,24,25,26,27),array(31,32,33,34,35),array(41,42,43,44,45),array(51,52,53,54,55));

$tr = count($massive);



?>

<table>
		<?php
			for ($a = 0; $a < $tr; $a++){
					echo "<tr>";
						for ($j = 0; $j < count($massive[$a]); $j++) {
						echo "<td>".$massive[$a][$j]."</td>";
				}
				echo "</tr>";
			}
		?>
</table>

