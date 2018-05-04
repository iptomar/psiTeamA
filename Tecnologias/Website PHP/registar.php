
	<?php
		session_start();
		if($_SESSION["login"] === true) {
			include_once "headeron.php";
		} else {
			include_once "headeroff.php";
		}
		
	?> 
	<div class="conteudo">
		<h1>Registar</h1>
		<div class="login">
			<form class="form"  method="post" action="php/validar_registo.php">
				<input id="nome" name="nome" class="nome" type="text" maxlength="64" placeholder="Nome" required /><br/>
				<input id="user" name="user" class="user" type="text" maxlength="64" placeholder="Username" required /><br/>
				<input id="idd" name="idade" class="idd" type="text" maxlength="2" placeholder="Idade" required /><br/>
				<input id="email" name="email" class="email" type="email" maxlength="64" placeholder="Email" required /><br/><br/>
				<input id="pw" name="pw" class="pw" type="password" maxlength="64" placeholder="Password" required /><br/>
				<input id="pwdn" name="pwdn" class="pwdn" type="password" maxlength="64" placeholder="Password de novo" required /><br/>
				<input id="btn_guardar" class="btn_guardar" type="submit" name="btn_guardar" value="Registar" />
			</form>
		</div>
	</div>
	<?php
		include_once "footer.php"; 
	?>
	