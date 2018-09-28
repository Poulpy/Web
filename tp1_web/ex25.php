<html>

<?php
    if (isset($_POST['ip']))
    {
        $t = explode(".", $_POST['ip']);
        $i =1;
        foreach ($t as $i)
        {
            if ($i < 0 || $i > 255)
            {
                echo "adresse ip non valide<br>";
                $i = 0;
            }
        }
        if ($i == 1)
        {
            echo "IP (binaire) : ";
            echo decbin($t[0]) . "." . decbin($t[1]) . "." . decbin($t[2]) . "." . decbin($t[3]) . "<br>";
            echo "IP (hexadecimal) : ";
            echo dechex($t[0]) . "." . dechex($t[1]) . "." . dechex($t[2]) . "." . dechex($t[3]);
        }
        
    }
?>

    <form action="" method="post">
		<input placeholder="ip" name="ip" required>
		<button type=submit>Ajouter</button>
    </form>

</html>