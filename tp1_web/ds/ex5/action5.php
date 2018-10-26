<?php

if(isset($_POST['select'])) {
    $resultat = 'zz';
    $v = $_POST['select'];
    switch($v) {
        case 2:
            $id = 1;
            break;
        case 3:
            $id = 2;
            break;
        case 6:
            $id = 3;
            break;
        default:
            $id = 0;
    }
    $file = "data02.csv";
    $somme = 0;
    if (file_exists($file) and $id != 0) {
        $f = file($file);
        $c = count($f);
        $a = explode(',', $f[0]);
        for ($i = 1; $i != $c; $i++)
        {
            $a = explode(',', $f[$i]);
            $somme += $a[$v];
        }
        $resultat = number_format($somme / (float)($c- 1), 2, ',', ' ');
    }
    header('location: ex5.php?res='.$resultat.'&id='.$id);
}

?>