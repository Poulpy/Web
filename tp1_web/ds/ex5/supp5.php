<?php

if (isset($_GET['sup'])) {
    $file = "data03.csv";
    if (file_exists($file)) {
        $pointeur = fopen($file, 'r+');
        $i = 0;
        while(!feof($pointeur)) {
            if ($i == $_GET['sup']) {
                fputs($pointeur, "");
            }
            fgets($pointeur);
            $i++;
        }
        fclose($pointeur);
    }
}
header('location: ex5.php');
?>