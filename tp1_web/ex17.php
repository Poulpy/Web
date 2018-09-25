<!DOCTYPE html>
<html lang="fr">
    <body>
		<form action="action.php" method="get">
			<div class="form-group">
				<input type="login" class="form-control" placeholder="Email ou numéro de téléphone" name="login">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
			</div>
			<button type="submit">Connexion</button>
		</form>
    </body>
</html>
<?php
define("ERROR","error");
if (isset($_GET['m']) && $_GET['m']==1)
	echo ERROR;
?>