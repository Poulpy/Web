<html>
    <body>
        <?php
            $inar = false;
            $file = "database.csv";
            if (isset($_GET['a']) && $_GET['a']== 1) {
                if (file_exists($file))
                {
                    $pointeur=fopen($file,"r");
                    echo "<table border='1' cellpading='5'>";
                    while (!feof($pointeur))
                    {
                        $t=fgetcsv($pointeur,1024, ',');
                        if ($_SERVER['REMOTE_ADDR'] == $t[0])
                            $inar = true;
                        echo "<tr>";
                        if ($t) {
                            foreach ($t as $v)
                            {
                                echo "<td>". $v ."</td>";
                            }
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    fclose($pointeur);
                }
            }
                

            echo "<h4>Votre adresse IP est : " . $_SERVER['REMOTE_ADDR'] . " <br>" . date("d/m/y"). "</h4>";

            $file="database.csv";
            if (file_exists($file) && !$inar)
            {
                $pointeur=fopen($file,"a");
                if (isset($_SERVER['REMOTE_ADDR']))
                {
                    $a = array($_SERVER['REMOTE_ADDR'], date("m/d/y"));
                    fputcsv($pointeur, $a, ',');
                }
                fclose($pointeur);
            }
        ?>
        <a href="?a=1">Afficher tableau</a>
    </body>
</html>