<?php
	$b = checkdate(12,1,1999);// valide une date
	echo (int)$b . "<br>";
	echo "date". "<br>";
	
	$d = date('d / D / j / l / N / S / w / z / W / F / m / M / n / t');
	echo $d . "<br>";
	$d = date('L / o / y / Y / a / A / B / g / G / h / H / i / s / u');
	echo $d . "<br>";
	$d = date('v / e / I / O / P / T / Z / c / r / U');
	echo $d . "<br>";
	
	echo "strftime<br>";
	echo strftime('%a')."<br>";// Fri
	echo strftime('%A')."<br>";// Friday
	echo strftime('%d')."<br>";// le jour (21) avec 0 initial (06)
	echo strftime('%e')."<br>";// le jour du mois
	echo strftime('%j')."<br>";// jour de l'annee (1-365)
	echo strftime('%u')."<br>";// jour de la semaine (1-7)
	echo strftime('%w')."<br>";// representation numerique du jour de la semaine
	echo 'getdate<br>';
	$tab = getdate();
	print_r($tab);
	echo '<br>';
	echo 'time<br>';
	print_r(time());
?>