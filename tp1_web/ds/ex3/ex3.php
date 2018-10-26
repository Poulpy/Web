<html>
    <head>
    <title>ex3</title>
    <meta charset='UTF-8'>
    <link href='stylecss2.css' rel='stylesheet'>
    </head>

    <body>
        <h1> Scodoc 2018</h1>
        <hr>
        <h2>Exercice 3</h2>
        <form action='' method='post'>
            <input type='submit' name='insert' value='Insert/Suppr'/>
        </form>
        <br><br>
        <table border='1' cellpadding='5'>

<?php

if (isset($_POST['insert'])) {
    if (isset($_COOKIE['file'])) {
        setcookie('file', intval(!(boolval($_COOKIE['file']))));
    }
    else {
        setcookie('file', 1);
    }
    header('location: ex3.php');
}


$file = "data02.csv";
$file2 = "data02b.csv";
if (file_exists($file)) {
    $f = file($file);
    $c = count($f);
    
    
    if (isset($_COOKIE['file']) && $_COOKIE['file'] == 1) {
        if (file_exists($file2)) {
            $f2 = file($file2);
            $c2 = count($f2);
            // on affiche l'entete
            $a = explode(',', $f[0]);
            $a2 = explode(',', $f2[0]);
            echo '<tr><th>'.$a2[1].'</th>';
            
            for($j = 0; $j != 7; $j++) {
                echo '<th>'.$a[$j].'</th>';
            }
            echo '</tr>';
        
            for ($i = 1; $i != $c; $i++) {
                $a = explode(',', $f[$i]);
                $a2 = explode(',', $f2[$i]);
                echo '<tr><td>'.$a2[1].'</td>';
                
                
                for($j = 0; $j!=7; $j++) {
                    if ($j == 1) {
                        echo '<td>'.date("D m M Y", strtotime($a[1])).'</td>';
                    }
                    else if ($j > 1){
                        echo '<td>'.number_format((float)$a[$j], 2, ',', ' ').'</td>';
                    }
                    else echo '<td>'.$a[$j].'</td>';
                }
                echo "</tr>";
            }
            
        }
    }

    else {
        $a = explode(',', $f[0]);
        echo '<tr>';
        for($j = 0; $j != 7; $j++) {
            echo '<th>'.$a[$j].'</th>';
        }
        echo '</tr>';
        for ($i = 1; $i != $c; $i++) {
            echo "<tr>";
            $a = explode(',', $f[$i]);
            for($j = 0; $j!=7; $j++) {
                if ($j == 1) {
                    echo '<td>'.date("D m M Y", strtotime($a[1])).'</td>';
                }
                else if ($j > 1){
                    echo '<td>'.number_format((float)$a[$j], 2, ',', ' ').'</td>';
                }
                else echo '<td>'.$a[$j].'</td>';
            }
            echo "</tr>";
        }
    }// else
}

?>
</body>
</html>