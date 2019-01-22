<?php
if (isset($_POST['login'], $_POST['mdp']))
{
	$connexion = mysql_connect("localhost", "root", "");
	$ok = mysql_select_db("CHAP3");
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	$requete = "SELECT * FROM EX12 WHERE login='$login' AND mdp='$mdp'";
	echo $requete;// 'OR 1=1#
	$sql = mysql_query($requete) or die(mysql_error());
	if (mysql_num_rows($sql) == 1)
	{
		echo "Bienvenue $login dans vote espace membre !";
	}
	else
	{
		echo "Nom d'utilisateur et/ou mot de passe incorrecte";
	}	
}

?>