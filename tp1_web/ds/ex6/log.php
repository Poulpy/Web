
<?php
    if (isset($_POST['login'], $_POST['mdp'])) {
        if (!(empty($_POST['login']) && empty($_POST['mdp']))) {
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['mdp'] = $_POST['mdp'];
                header('location: exercice6etudiant.php');
            else {
                header('location: exercice6.php');
            }
        }
    }
?>