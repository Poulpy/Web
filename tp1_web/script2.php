<?php
	// PGCD
	$i=3;
	$j=9;
	while ($j !=0)
	{
		$k = $i % $j;
		$i=$j;
		$j=$k;
	}
	echo "la valeur est : <b>".$i."<b/>";
?>