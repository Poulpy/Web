<html>
<head>
</head>
<body>
<?php



        if (isset($_GET['colonne']) && isset($_GET['ligne']))
	{
      		if ($_GET['colonne']>40 && $_GET['ligne']>40 && $_GET['colonne']<0 && $_GET['ligne']<0)
		{
           		$COL = 10;
			$LIG = 10;
      		}
      		else
		{
           		$COL = $_GET['colonne'];
			$LIG = $_GET['ligne'];
       		}
     	}
	else
	{
		$COL = 10;
		$LIG = 10;
	}

	if (isset($_GET['couleur']))
	{
		$COUL = $_GET['couleur'];
	}
	else
	{
		$COUL = "black";
	}

		echo "<table border='1' cellpading='5'>";
		for ($l = 0; $l < $LIG; $l++)
		{
			echo "<tr>";
			for ($c = 0; $c < $COL; $c++)
			{
				if ($c%2 == $l%2)
					echo "<td width=20 height=20></td>";
				else
					echo "<td width=20 height=20 bgcolor='".$COUL."'></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
	<form action="" method="get">
		<div class="form-group">
			<input class="form-control" placeholder="ligne" name="ligne" required>
		</div>
		<div class="form-group">
			<input placeholder="colonne" name="colonne" required>
		</div>
		<div class="form-group">
			<input type="color" placeholder="couleur" name="couleur">
		</div>
		<button type=submit>Nouveau damier de la mort qui tue</button>
	</form>
	</body>
</html>