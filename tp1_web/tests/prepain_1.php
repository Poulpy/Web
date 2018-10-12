<html>
    <h1>Test numero 1</h1>
    <h2>REPAIN Paul</h2>
    <hr>
    <?php
        define('T',TRUE);
        define('F',FALSE);
        $t = array(
            0=>array(F,F,F),
            1=>array(F,F,T),
            2=>array(F,T,F),
            3=>array(F,T,T),
            4=>array(T,F,F),
            5=>array(T,F,T),
            6=>array(T,T,F),
            7=>array(T,T,T)
        );  
        echo "<table border='1' cellpadding='5' align='center'>";
        echo '<tr><th>a</th><th>b</th><th>c</th><th>p</th></tr>';
        foreach ($t as $key => $i)
        {
            echo "<tr>";
            foreach ($i as $v)
            {
                echo "<td>".(int)$v."</td>";
            }
            echo "<td>".(int)(($i[0] && !$i[1]) || ($i[0] && $i[2]) || ($i[1] && $i[2]))."</td></tr>";
        }
        echo '</table>';
    ?>
    <hr>
    <p>Vous utiliserez la structure de donnees suivante :</p>
    <pre><code>
define('T',TRUE);
define('F',FALSE);
array(
	0=>array(F,F,F),
	1=>array(F,F,T),
	2=>array(F,T,F),
	3=>array(F,T,T),
	4=>array(T,F,F),
	5=>array(T,F,T),
	6=>array(T,T,F),
	7=>array(T,T,T)
)<br>
    Table de vérité de la proposition suivante : 
    <br>p:[(a et non(b)) ou (a et c) ou (b et c)]
    </pre></code>
</html>