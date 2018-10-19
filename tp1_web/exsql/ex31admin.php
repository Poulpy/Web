<?php

session_start();

function debug($x){
    echo "<pre>";
    print_r($x);
    echo "</pre>";
}

?>
<html>
    <h1>Bonjour Admin</h1>
    
    
    <fieldset>
        <legend>Fiches client</legend>
<?php

require("parametres.php");
$connexion=mysqli_connect($serveur,$login,$mdp) 
or die("Connexion impossible au serveur $serveur pour $login");
$bd="tpweb_sql";
mysqli_select_db($connexion,$bd)
or die("Impossible d'acceder à la base de données");

// SUPRESSION CLIENT
if (isset($_GET['s'])) {
    if (!empty($_GET['s'])) {

        $requete = 'DELETE from fiche_client where login=\''.$_GET['s'].'\'';
        $resultat = mysqli_query($connexion,$requete);
    }
}





$requete = "SELECT login, nom, mail, ville from fiche_client";
$resultat=mysqli_query($connexion,$requete);
echo "<table border='1' cellpadding='10'>";
echo '<tr><th>Login</th><th>Entreprise</th><th>Mail</th><th>Ville</th><th>actions</th></tr>';

while ($row = mysqli_fetch_row($resultat)) {
    echo '<tr>';
    foreach($row as $v) {
        echo '<td>'.$v.'</td>';
    }
    echo '<td><a href="ex31modif.php?m='. $row[0] .'">modifier</a> - <a href="?s='. $row[0] .'">supprimer</a></td>';
    echo '</tr>';
}

echo '</table>';
mysqli_close($connexion);


?>
        <form action="ex31logout.php">
            <input type='submit' value='DECONNEXION'>
        </form>
    </fieldset>
</html>
