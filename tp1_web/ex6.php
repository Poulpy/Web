<html>
	<head>
		<style type="text/css">
		#b
		{
			background-color: black;
		}
		</style>
	</head>
	<body>
	<?php
		echo "<table border='1' cellpading='5'>";
		for ($l = 0; $l < 10; $l++)
		{
			echo "<tr>";
			for ($c = 0; $c < 10; $c++)
			{
				if ($c%2 == $l%2)
					echo "<td width=20 height=20></td>";
				else
					echo "<td width=20 height=20 id='b'></td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
	</body>
</html>