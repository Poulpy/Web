<?php
	function majuscule($str)
	{
		$i = preg_match("/^[A-Z]/", $str);
		echo "$str : $i<br>";
	}
	function date_type($str)
	{
		$i = preg_match("/([1-9]|[1-2][0-9]|3[0-9])\/([1-9]|1[0-2])\/[0-9]/", $str);
		echo "$str : $i<br>";
	}
	function email_type($str)
	{
		$i = preg_match("/^[a-zA-Z0-9]+@[a-z0-9]+.[a-z]{2,4}$/", $str);
		// delimiteur : / ou #
		// ^ : debut d'une ligne
		// $ : fin d'une ligne
		// {2, 4} : 2 à 4 iterations
		echo "$str : $i<br>";
	}
	echo "Majuscule ?<br>";
	majuscule("agfh");
	majuscule("Agfh");
	majuscule("4gfh");
	majuscule("");
	echo "Date ?<br>";
	date_type("9/1/1999");
	date_type("9/12/1999");
	date_type("19/1/1999");
	date_type("1/0/1999");
	date_type("0/1/1999");
	date_type("10/1/1999");
	date_type("30/1/1");
	echo "Email ?<br>";
	email_type("parz@yahoo.com");
	email_type("pou@yahoo.com");
	email_type("par.z@ycom");
	email_type("pa.rz@yahoo.com");
?>