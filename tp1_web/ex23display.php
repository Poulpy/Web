<?php
	$file = "archive.csv";
        if (file_exists($file))
        {
            	$pointeur=fopen($file,"r");
            	echo "<table border='1' cellpading='5'>";
		echo "<tr><th>Taux</th><th>Capital</th><th>Nombre de Mois</th><th>Total</th></tr>";		
            	while (!feof($pointeur))
            	{
                	$t=fgetcsv($pointeur, 1024, ',');

                	echo "<tr>";
                	foreach ($t as $v)// warning
                	{
                    		echo "<td>". $v ."</td>";
                	}
                	echo "</tr>";
            	}
            	echo "</table>";
            	fclose($pointeur);
	}
?>