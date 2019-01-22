<?php

if (!empty($_REQUEST['contenu']))
{
	$contenu = htmlspecialchars($_REQUEST['contenu']);
	$connexion = mysql_connect("localhost", "root", "");
	$ok = mysql_select_db("CHAP3");
	mysql_query("INSERT INTO EX10 (TEXTE) VALUES('$contenu')");
	echo "enregistrement fait";
	return true;
}

?>
<html>
	<head>
		<title>ajout</title>
	</head>
	<body>
		<form method="POST" action="ajout.php">
			<textarea style="width:100%" name="contenu">
			</textarea>
			<br />
			<input type="submit" value="Valider" />
		</form>
	</body>
</html>