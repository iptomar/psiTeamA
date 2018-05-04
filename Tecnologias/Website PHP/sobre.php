
	<?php
		session_start();
		if($_SESSION["login"] === true) {
			include_once "headeron.php";
		} else {
			include_once "headeroff.php";
		}
		
	?> 
	<div class="conteudo">
		<h1>Sobre</h1>
	</div>
	<?php
		include_once "footer.php"; 
	?>
	