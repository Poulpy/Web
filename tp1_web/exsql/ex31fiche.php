<html>
    <fieldset>
        <legend>Fiche client</legend>
<?php

session_start();

require("parametres.php");
$connexion=mysqli_connect($serveur,$login,$mdp) 
or die("Connexion impossible au serveur $serveur pour $login");
$bd="tpweb_sql";
mysqli_select_db($connexion,$bd)
or die("Impossible d'acceder à la base de données");

$requete="SELECT nom, date, mail, ville from fiche_client where login='".$_SESSION['login']."'";
$resultat=mysqli_query($connexion,$requete);
$row = mysqli_fetch_row($resultat);
echo "<table border='1' cellpadding='10'>";
echo '<tr><th>Nom</th><th>Date</th><th>Mail</th><th>Ville</th></tr>';
foreach($row as $v) {
    echo '<td>'.$v.'</td>';
}
echo '</table>';
mysqli_close($connexion);

?>
        <form action="ex31logout.php">
            <input type='submit' value='DECONNEXION'>
        </form>
    </fieldset>
</html>
