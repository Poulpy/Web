<html>
<head>
<title>ex6</title>
<meta charset='UTF-8'>
<link href='stylecss3.css' rel='stylesheet'>
</head>
<body><h1>Scodoc 2018</h1><hr><h2>Exercice 6</h2><p>Bonjour <strong>

<?php
session_start();

$file = "data02.csv";
if (file_exists($file) and $id != 0) {
    $f = file($file);
    $c = count($f);
    $a = explode(',', $f[0]);
    echo $a[0].''
    for ($i = 1; $i != $c; $i++)
    {
        $a = explode(',', $f[$i]);
        echo '<td>'.number_format((float)$a[$j], 2, ',', ' ').'</td>';
    }
}

?>

</body>
</html>