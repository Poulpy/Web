<html>
<head>
<title>ex5</title>
<meta charset='UTF-8'>
<link href='stylecss2.css' rel='stylesheet'>
</head>
<body><h1>Scodoc 2018</h1><hr><h2>Exercice 5</h2><form method='post' action='action5.php'><select name='select'>
  <option value='2'>Moyenne en maths</option> 
  <option value='3'>Moyenne en programmation</option>
  <option value='6'>Moyenne en anglais</option>
  <option value='100'>Reset </option>
</select><input name='ok' value='OK' type='submit' /></form>&nbsp
<br><br>
<?php

// <a href='supp5.php?sup=14'> supprimer </a>

if (isset($_GET['res'])) {
    if (!empty($_GET['res']) and $_GET['res'] != 'zz') {
        echo 'La moyenne en ';
        switch($_GET['id']) {
            case '1':
                echo 'maths';
                break;
            case '2':
                echo 'programmation';
                break;
            case '3':
                echo 'anglais';
                break;
        }
        echo ' est <strong>'.$_GET['res'].'</strong>';
    }
}


echo "<br><br><table border='1' cellpadding='5'>";

$file = "data03.csv";
if (file_exists($file)) {
    $f = file($file);
    $c = count($f);
    
    $a = explode(',', $f[0]);
    echo '<tr>';
    for($j = 0; $j != 7; $j++) {
        echo '<th>'.$a[$j].'</th>';
    }
    echo '<th>suppression</th></tr>';
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
        echo "<td><a href='supp5.php?sup=". $i ."'> supprimer </a></td></tr>";
    }
}



?>
</table>
<hr><a href='reset5.php'> Restaurer l'affichage d'origine </a>
</body>
</html>