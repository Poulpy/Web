<?php
    if (isset($_POST['login'], $_POST['mdp'])) {
        if (!(empty($_POST['login']) && empty($_POST['mdp']))) {
            if ($_POST['login']=="admin" && $_POST['mdp'] == "admin") {
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['mdp'] = $_POST['mdp'];
                header('Location: ex29accueil.php');
            }
            else {
                header('location: ex29log.php?e=1');
            }
        }
    }
?>
