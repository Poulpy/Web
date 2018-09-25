<?php
	function calcul_emprunt($t, $c, $n, $print = false)
	{
		$m = ($c * ($t / 12)) / (1 - pow((1 + $t / 12), -$n));
		if ($print)
		{
			echo "Emprunt : $c<br>Taux : $t<br>Nombre de mois : $n<br>Mensualites : $m";
		}
		return $m;
	}
	calcul_emprunt(0.032, 300000, 240, true);
?>