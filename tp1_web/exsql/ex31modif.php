<?php session_start(); ?>

<html>
<form action="" method="post">
    <input type="text" name="name" required>
    <input type="text" name="mail" required>
    <input type="text" name="ville" required>
    <input type="text" name="mdp" required>
    <input type="hidden" name="login" value=<?php echo '"' . $_GET['m'] . '"'; ?> >
    <input type='submit' value='MODIFIER'>
</form>
<?php
// MODIFICATION CLIENT
if (isset($_POST['name'])) {
    if (!empty($_POST['name'])) {
        // connexion au serveur et a la base de donnee
        require("parametres.php");
        $connexion=mysqli_connect($serveur,$login,$mdp) 
        or die("Connexion impossible au serveur $serveur pour $login");
        $bd = "tpweb_sql";
        mysqli_select_db($connexion,$bd)
        or die("Impossible d'acceder à la base de données");

        $requete = "UPDATE fiche_client SET MDP='" . $_POST['mdp'] . "'";
        $requete .= ", MAIL='" . $_POST['mail'] . "'";
        $requete .= ", NOM='" . $_POST['name'] . "'";
        $requete .= ", VILLE='" . $_POST['ville'] . "'";
        $requete .= "WHERE LOGIN='" . $_POST['login'] . "'";
        $resultat = mysqli_query($connexion, $requete);
        
    }
}
?>
<a href="ex31admin.php">FICHES CLIENT</a>
</html>
