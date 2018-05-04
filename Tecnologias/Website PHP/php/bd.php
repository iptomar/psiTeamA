<?php

	$host = "localhost";
	$user = "root";
	$pw = "";
	$dbname = "website";

	$db = mysqli_connect($host,$user,$pw,$dbname) or die("Erro -" . mysqli_error($db)); 	
 	$db->set_charset("utf8");
?>