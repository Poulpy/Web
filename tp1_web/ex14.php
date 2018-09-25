<?php
	echo "<table border='1' cellpading='5'>";
	for ($x = 100; $x < 999; $x++)
	{
		if ($x % 2 == 1 && $x % 3 == 1 && $x % 4 == 1 && $x % 5 == 1 && $x % 7 == 1)
		{
			echo "<td>" . $x . "</td>";
		}
	}
	echo "</table>";
?>