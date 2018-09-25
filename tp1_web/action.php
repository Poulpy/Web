<?php
    // definit un login et un mot de passe
    $login_valide = "admin";
    $pwd_valide = "admin";
    // teste si nos variables sont definies
    if (isset($_GET['login']) && isset($_GET['mdp'])) {
        // verifie si le pseudo et le mot de passe sont autorise
        if ($login_valide == $_GET['login'] && $pwd_valide == $_GET['mdp']) {
            echo 'BRAVO';
            // enregistre parametres du visiteur comme variables de session
        }
        else {
            // mauvais login ou mdp
			header("Location:ex17.php?m=1");
        }
    }
    else {
        echo 'Les variables du formulaire ne sont pas declarees.';
    }
?>