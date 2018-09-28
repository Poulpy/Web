<html>


<?php
    $caractere=array(4,6,8,9,10,12,14,15,16,19);
    $effectif=array(1,2,3,4,5,5,7,5,1,2);
    $serie = array($caractere, $effectif);
    
    function moyenne_arith($s)
    {
        $somme = 0;
        $c = count($s[0]);
        for ($i = 0; $i < $c; $i++)
        {
            $somme = $s[0][$i] * $s[1][$i];
        }
        return $somme * (1.0 / $c);
    }
    
    function variance($s)
    {
        $somme = 0;
        $m = moyenne_arith($s);
        $c = count($s[0]);
        for ($i = 0; $i < $c; $i++)
        {
            $somme = pow(($s[0][$i] - $m), 2) * $s[1][$i];
        }
        return $somme * (1.0 / $c);
    }
    
    function ecart_type($s)
    {
        return sqrt(variance($s));
    }
    
    function display_serie($s)
    {
    echo "<table border='1' cellpading='5'>";
	foreach ($s as $key => $val)
	{
		echo '<tr><th>' . $key . '</th>';
		foreach ($val as $v)
		{
			echo '<td width=20 height=20>' . $v . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
    }
    

    $serie2 = array("caractere" => $caractere, "effectif" => $effectif);
    display_serie($serie2);
    if (isset($_POST['calculs']))// on entre le NAME du SELECT
    {
        if ($_POST['calculs'] == 'Moyenne')
        {
            echo "<br>" . moyenne_arith($serie). "<br>";
        }
        if ($_POST['calculs'] == 'Variance')
        {
            echo "<br>" . variance($serie). "<br>";
        }
        if ($_POST['calculs'] == 'Ecart')
        {
            echo "<br>" . ecart_type($serie). "<br>";
        }
    }

?>
    <form action="" method="post">
        <select id="calculs" name="calculs"><!-- NAME TRES IMPORTANT -->
            <option value="Moyenne">Moyenne</option> 
            <option value="Variance">Variance</option>
            <option value="Ecart">Ecart type</option>
        </select>
        <input type="submit"></input>
    </form>

</html>