	<?php
		session_start();

		$_SESSION['loginnomeutilizador'] = "";

		$_SESSION["login"] = false;
		
		
		if($_SESSION["login"] === true) {
			include_once "headeron.php";
		} else {
			include_once "headeroff.php";
		}

	?> 
	<div class="conteudo">
		<h1>Login</h1>
		<div class="login">
			<form class="form"  method="post" action="php/validar_login.php">
	
				<input name="username" id="user" class="user" type="text" maxlength="64" placeholder="Username" required /><br/>
				<input name="password" id="pw" class="pw" type="password" maxlength="64" placeholder="Password" required /><br/>
				<input id="btn_guardar" class="btn_guardar" type="submit" name="btn_guardar" value="Entrar" />
			</form>
		</div>
	</div>
	<?php
		include_once "footer.php"; 
	?>
	