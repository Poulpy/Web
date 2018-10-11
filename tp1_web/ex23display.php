<?php
    $file = "archive.csv";
    if (file_exists($file))
    {
        $pointeur=fopen($file,"r");
        echo "<table border='1' cellpading='5'>";
        echo "<tr><th>Taux</th><th>Capital</th><th>Nombre de Mois</th><th>Total</th></tr>";
        $f = file($file);
        $c = count($f);
        if ($c > 5)// s'il y a plus de 5 lignes
        {
            for ($i = 5; $i != 0; $i--)
            {
                echo "<tr>";
                $a = explode(',', $f[$c-$i]);
                foreach ($a as $v)
                {
                    echo "<td>". $v ."</td>";
                }
                echo "</tr>";
            }
        }
        else
        {
            while (!feof($pointeur))
            {
                $t=fgetcsv($pointeur, 1024, ',');
                echo "<tr>";
                if ($t)
                {
                    foreach ($t as $v)
                    {
                        echo "<td>". $v ."</td>";
                    }
                }
                echo "</tr>";
            }
        }
        echo "</table>";
        fclose($pointeur);
    }
?>
