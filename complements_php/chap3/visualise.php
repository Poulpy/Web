<?php
setcookie('secret', rand(100, 999));
$connexion = mysql_connect("localhost", "root", "");
$ok = mysql_select_db("CHAP3");
$sql = "SELECT * FROM EX10";
$result = mysql_query($sql);
$article=mysql_fetch_array($result);
?>
<html>
	<head>
		<title>visual</title>
	</head>
	<body>
		<div style="width:200px; border:2px solid red; padding:6px; heigth:200px">
			<?php echo ($article['texte']); ?>
		</div>
	</body>
</html>