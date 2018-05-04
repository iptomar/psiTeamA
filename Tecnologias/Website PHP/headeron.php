<!DOCTYPE HTML>
<html>
	<head>
		<title>WEBSITE</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/javascript.js"></script>
		<link href='css/estilos.css' rel='stylesheet' type='text/css' />
	</head>
	<body>
	<header>
		<div id="nomeut">
			<?php echo "Bem vindo <span>".$_SESSION['loginnomeutilizador']."</span> !"; ?>
		</div>
		<nav id="menu">
			<ul id="menu-nav">
		        <li><a href="index.php">Inicio</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="login.php">Logout</a></li>
		    </ul>
		</nav>
	</header>
	