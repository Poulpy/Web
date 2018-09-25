<html>
<head>
<style>
	td
	{
		color:black;
		width:20;
		height:20;
	}
</style>
</head>
<body>

<?php
	$t[5][3] = 0;
	for($i=0; $i<10;$i++)
	{
		do
		{
			$l = rand(0,2);
			$c = rand(0,4);
		} while (!empty($t[$l][$c]));
		$t[$l][$c] = $i;
	}
	echo "<table border='1' cellpading='5'>";
	for($l=0;$l<3;$l++)
	{
		echo "<tr>";
		for ($c=0;$c<5;$c++)
		{
			if (empty($t[$l][$c]))
				echo "<td></td>";
			else
				echo "<td>".$t[$l][$c]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

</body>
<a href="./ex15.php" width='50' height='50'>Rafraichir</a>
</html>