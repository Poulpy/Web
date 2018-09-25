<?php
	$azerty1 = array(2,5,7,10,20,21,22,23,24,25,30);
	$azerty2 = array(1.5,2,2.5,3,3.5,4,7,8,5,4,12);
	$azerty = array("an" => $azerty1,"taux" => $azerty2);
	echo "<pre>";
	print_r($azerty);
	echo "</pre>";
	// Affichage du tableau
	echo "<table border='1' cellpading='5'>";
	foreach ($azerty as $key => $val)
	{
		echo '<tr><th>' . $key . '</th>';
		foreach ($val as $v)
		{
			echo '<td>' . $v . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
	foreach ($azerty as $key => $val)
	{
		print_r("Moyenne : " . array_sum($val) / count($val) . "<br>");
		print_r("Mininum : " . min($val) . "<br>");
	}
	print_r("Covariance : " . covariance($azerty1, $azerty2) . "<br>");
	
	
	function covariance($t, $t2)
	{
		$somme = 0;
		$c = count($t);
		$m = array_sum($t) / count($t);
		$m2 = array_sum($t2) / count($t2);
		echo test_moy($m);
		echo test_moy($m2);
		$v = $t;
		for ($a = 0; $a < $c; $a++)
		{
			//$somme += ($v - $m) * ($v2 - $m2);
			//echo $somme . "<br>";
		}
		return $somme * (1.0 / (count($t) + count($t2) - 1));
	}
	
	function test_moy($m)
	{
		if ($m >= 15)
			return 1;
		else if ($m < 10)
			return -1;
		return 0;
	}
?>