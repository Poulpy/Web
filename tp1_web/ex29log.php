<html>
    <h2>Connexion</h2>
    <form action="ex29session.php" method="post">
        <input placeholder="identifiant" name="login" required>
        <input placeholder="mot de passe" name="mdp" required>
        <input type="submit">
    </form>
</html>
<?php
    if (isset($_GET['e']))
        if ($_GET['e'] == 1)
            echo "<b>L'identifiant ou le mot de passe sont incorrectes</b>";
?>