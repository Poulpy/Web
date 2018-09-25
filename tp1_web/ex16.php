<!DOCTYPE html>
<html lang="fr">
    <body>
		<form action="" method="get">
			<div class="form-group">
				<input type="login" class="form-control" placeholder="login" name="login" id='l'>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Mot de passe" name="mdp" id='m'>
			</div>
			<button type=submit>Connexion</button>
		</form>
    </body>
</html>
<?php
    // definit un login et un mot de passe
    $login_valide = "admin";
    $pwd_valide = "admin";
    // teste si nos variables sont definies
    if (isset($_GET['login']) && isset($_GET['mdp'])) {
        // verifie si le pseudo et le mot de passe sont autorise
        if ($login_valide == $_GET['login'] && $pwd_valide == $_GET['mdp']) {
            echo "BRAVO";
        }
        else {
            // mauvais login ou mdp
			echo "ERROR";
        }
    }
?>