<?php
	if (isset($_POST['id']))
	{
		if (is_numeric($_POST['id']))
		{
			$connexion = mysql_connect("localhost", "root", "");
			$select = mysql_select_db("CHAP3");
			$result = mysql_query("DELETE FROM EX9 WHERE id=".$_POST['id']);
			mysql_close($connexion);
		}		
	}
?>