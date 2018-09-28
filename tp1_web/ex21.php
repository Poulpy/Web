<html>
    <?php
        $file="texte.csv";
        if (file_exists($file))
        {
            $pointeur=fopen($file,"a");
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['profil']))
            {
                $a = array($_POST['nom'], $_POST['prenom'], $_POST['profil']);
                fputcsv($pointeur, $a, ',');
            }
            fclose($pointeur);
        }

        if (file_exists($file))
        {
            $pointeur=fopen($file,"r");
            echo "<table border='1' cellpading='5'>";
            while (!feof($pointeur))
            {
                $t=fgetcsv($pointeur,1024, ',');
                /*echo "<pre>";
                print_r($t);
                echo "</pre>";
                */
                echo "<tr>";
                foreach ($t as $v)// warning
                {
                    echo "<td>". $v ."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            fclose($pointeur);
        }
    ?>
    <form action="" method="post">
		<input placeholder="nom" name="nom" required>
		<input placeholder="prenom" name="prenom" required>
		<input placeholder="profil" name="profil" required>
		<button type=submit>Ajouter</button>
    </form>
</html>