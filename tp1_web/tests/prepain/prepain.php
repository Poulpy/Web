<html>
<?php
    // ajout d'un etudiant dans le fichier csv si tous les champs sont remplis
    if (isset($_POST['nom'], $_POST['ue1'], $_POST['ue2'], $_POST['ue3'], $_POST['ue4'], $_POST['gp'], $_POST['sem'])) {
        if (!empty($_POST['nom']) and !empty($_POST['ue1']) and !empty($_POST['ue2']) and !empty($_POST['ue3']) and !empty($_POST['ue4']) and !empty($_POST['gp']) and !empty($_POST['sem'])) {
            $file="testb3.csv";
            if (file_exists($file))
            {
                $pointeur=fopen($file, "a");
                $a = array($_POST['nom'], $_POST['ue1'], $_POST['ue2'], $_POST['ue3'], $_POST['ue4'], $_POST['gp'], $_POST['sem']);
                fputcsv($pointeur, $a, ',');
                fclose($pointeur);
            }
        }
    }
?>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='onestyle.css' />
    </head>
    <div id='content'>
        <h1>Test 3</h1><h2>REPAIN Paul</h2><hr>
        <p>Reproduire en php le script suivant : </p>
        <h5>Durée : 60mn </h5>
        <p> le fichier de données à utiliser est : <a href='testb3.csv'/> ici </a></p>
        <p>le fichier css à utiliser est <a href='onestyle.css'/>ici </a></p>
        <div id='gauche'>
            <h4>Sélection pour affichage</h4>
            <fieldset>
                <legend> Sélection </legend>
                <form action='' method='post'>
                    <select name='nom'>
<?php
    // on affiche les étudiants qui sont stockés dans le fichier
    $file = "testb3.csv";
    if (file_exists($file))
    {
        $pointeur=fopen($file,"r");
        while (!feof($pointeur))
        {
            $t = fgetcsv($pointeur, 1024, ',');
            if ($l != 0) {
                if ($t)
                {
                    echo "<option>". $t[0] ."</option>";
                }
            }
            $l++;
        }
        fclose($pointeur);
    }
?>
                    </select>
                    <input type='submit' name='ok' value='OK'>
                </form>
            </fieldset><h4>Ajout d'un étudiant</h4>
            <fieldset>
                <legend>Ajout</legend>
                <form action='' method='post'>
                    <table><tr><td>Nom :</td><td>
                        <input type='text' maxsize='10' name='nom' required></td></tr><tr>
                        <td>Ue 1 :</td><td><input type='text' maxsize='10' name='ue1'></td></tr><tr>
                        <td>Ue 2 :</td><td><input type='text' maxsize='10' name='ue2'></td></tr><tr>
                        <td>Ue 3:</td><td><input type='text' maxsize='10' name='ue3'></td></tr>
                        <tr><td>Ue 4:</td><td><input type='text' maxsize='10' name='ue4'></td></tr>
                        <tr><td>Groupe :</td><td><input type='text' maxsize='10' name='gp'></td></tr>
                        <tr><td>Semestre :</td><td><input type='text' maxsize='10' name='sem'></td></tr>
                        <tr><td>&nbsp;</td><td>
                        <input type='submit' name='plus' value='Ajouter'></td></tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
    
    <div id="droite">
<?php
    // affichage d'un etudiant, de son ue, de son groupe et de son semestre
    // affiche un etudiant qui vient d etre ajoute
    if (isset($_POST['nom'])) {
        if (!empty($_POST['nom'])) {
            $l = 0;
            $file = "testb3.csv";
            if (file_exists($file))
            {
                $pointeur=fopen($file,"r");
                echo "<table border='1' cellpading='5'>";
                while (!feof($pointeur))
                {
                    $t=fgetcsv($pointeur, 1024, ',');
                    if ($l == 0 or strcmp($t[0], $_POST['nom']) == 0) {
                        echo "<tr>";
                        if ($t)
                        {
                            foreach ($t as $v)
                            {
                                echo "<td>". $v ."</td>";
                            }
                        }
                        echo "</tr>";
                    }
                    $l++;
                }
                echo "</table>";
                fclose($pointeur);
            }
        }
    }
?>
    </div>
</html>