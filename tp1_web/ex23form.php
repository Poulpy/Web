<form action="" method="post">
    <input placeholder="Capital" name="c" required>
    <input placeholder="Nombre de mensualites" name="m" required>
    <input placeholder="Taux d'interet" name="t" required>
    <input type="submit"></input>
</form>
<?php
    function calcul_emprunt($t, $c, $n, $print = false)
    {
        $m = ($c * ($t / 12)) / (1 - pow((1 + $t / 12), -$n));
        if ($print)
        {
            echo "Emprunt : $c<br>Taux : $t<br>Nombre de mois : $n<br>Mensualites : $m";
        }
        return $m;
    }
    if (isset($_POST['t'], $_POST['m'], $_POST['c']))
    {
        echo calcul_emprunt($_POST['t'], $_POST['c'], $_POST['m']);
        $file="archive.csv";
        $pointeur=fopen($file,"a");
        $a = array($_POST['t'], $_POST['c'], $_POST['m'], calcul_emprunt($_POST['t'], $_POST['c'], $_POST['m']));
        fputcsv($pointeur, $a, ',');
        fclose($pointeur);
    }
?>
