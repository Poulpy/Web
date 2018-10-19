<?php
    // On demarre la session
    session_start ();
    // On detruit les variables de notre session
    session_unset ();
    // On detruit notre session
    session_destroy ();
    // On redirige le visiteur vers la page d'accueil
    header ('location: ex31home.php');
?>