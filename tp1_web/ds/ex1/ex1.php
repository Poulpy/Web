<html>
    <head>
        <title>ex1</title>
        <meta charset='UTF-8'>
        <link href='stylecss.css' rel='stylesheet'>
    </head>
    <body>
        <h1> Scodoc 2018</h1>
        <hr>
        <h2> Exercice 1</h2>
        <table border='1' cellpading='5'>
            <?php
            $file = "data02.csv";
            if (file_exists($file))
            {
                $f = file($file);
                $c = count($f);
                for ($i = 1; $i != $c; $i++)
                {
                    echo "<tr>";
                    $a = explode(',', $f[$i]);
                    echo '<td>'.$a[0].'</td>';
                    for($j = 2; $j!=7; $j++) {
                        echo '<td>' . $a[$j] . '</td>';
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>