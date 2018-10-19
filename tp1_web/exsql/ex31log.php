<?php

if (isset($_POST['login'], $_POST['mdp'])) {
    if (!(empty($_POST['login']) && empty($_POST['mdp']))) {
        // s'il s'agit d'un administrateur
        if ($_POST['login'] == 'admin' && $_POST['mdp'] == 'admin') {
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['mdp'] = $_POST['mdp'];
            header('location:ex31admin.php');
        }
        else {
            // si ce n'est pas un administrateur
            // connexion au serveur et a la base de donnee
            require("parametres.php");
            $connexion=mysqli_connect($serveur,$login,$mdp) 
            or die("Connexion impossible au serveur $serveur pour $login");
            $bd="tpweb_sql";
            mysqli_select_db($connexion,$bd)
            or die("Impossible d'acceder à la base de données");

            $requete = "SELECT mdp from fiche_client where login='" . $_POST['login'] . "'";
            $resultat = mysqli_query($connexion,$requete);
            // on recupere le mot de passe renvoye
            $mdp_bd = mysqli_fetch_row($resultat);

            mysqli_close($connexion);
            // on compare le mot de passe de la bd avec celui entre par l'user
            if (strcmp($_POST['mdp'], $mdp_bd[0]) == 0) {
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['mdp'] = $_POST['mdp'];
                header('location:ex31fiche.php');
            }
            else {
                header('location: ex31home.php?e=1');
            }

        }
    }
}

?>
