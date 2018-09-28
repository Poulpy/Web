<?php
    $file="texte.csv";
    $i=0;
    $pointeur=fopen($file,"r");
    echo "<table border='1' cellpading='5'>";
    while (!feof($pointeur))
    {
        $t=fgetcsv($pointeur,1024);
        echo "<tr>";
        foreach ($t as $v)
        {
            echo "<td>". $v ."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>