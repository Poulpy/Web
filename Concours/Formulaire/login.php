<?php
    // definit un login et un mot de passe
    $login_valide = "paul.repain@yahoo.com";
    $pwd_valide = "lemien";

    // teste si nos variables sont definies
    if (isset($_POST['login']) && isset($_POST['mdp'])) {

        // verifie si le pseudo et le mot de passe sont autorise
        if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['mdp']) {

            session_start ();
            // enregistre parametres du visiteur comme variables de session
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['mdp'] = $_POST['mdp'];

            // redirection
            header ('location: page_membre.php');
        }
        else {
            // mauvais login ou mdp
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            // redirection page d'accueil
            echo '<meta http-equiv="refresh" content="0;URL=twitter.php">';
        }
    }
    else {
        echo 'Les variables du formulaire ne sont pas declarees.';
    }
?>