
	<?php
		session_start();	
		include_once "php/bd.php";
		if($_SESSION["login"] === true) {
			include_once "headeron.php";
		} else {
			include_once "headeroff.php";
			header("Location: perfiloff.php");
		}

		$nomeutilizador = $_SESSION['loginnomeutilizador'];
	?> 
	<div class="conteudo">
		<h1>Perfil</h1>
		<?php
			$sql = "SELECT * FROM login where username = '$nomeutilizador'" or die("Erro" . mysqli_error($db)); 
			$resultado = $db->query($sql); 
			while($row = mysqli_fetch_array($resultado)) { 
				echo '<div class="perfil">';
				echo "Username: ".$row["username"]."<br>";
				echo "Nome: ".$row["nome"]."<br>";
				if($row["idade"] !=1) {
					echo "Idade: ".$row["idade"]." anos<br>";
				}else{
					echo "Idade: ".$row["idade"]." ano<br>";
				}
				echo "Email: ".$row["email"]."<br>";
				echo '</div>';
			}
		?>
		<div class="paineis">
			<div class="painel">
				<div class="header">Alterar Password</div>
				<div class="content">
					<center><form class="form" method="post" action="changepw.php">
						<label class="description">Password Atual</label><br/>
						<input id="currentpw" class="currentpw" type="text" maxlength="64" placeholder="Password atual" required/><br/>
						<label class="description">Nova Password</label><br/>
						<input id="newpw" class="newpw" type="text" maxlength="64" placeholder="Nova Password" required/><br/>
						<input id="newpw" class="newpw" type="text" maxlength="64" placeholder="Nova Password" required/><br/>
						<input id="btn_guardar_p" class="btn_guardar_p" type="submit" name="btn_guardar_p" value="Guardar" />
					</form></center>
				</div>
			</div>
			<div class="painel">
				<div class="header">Alterar Email</div>
				<div class="content">
					<center><form class="form" method="post" action="changepw.php">
						<label class="description">Email Atual</label><br/>
						<input id="currentemail" class="currentemail" type="email" maxlength="64" placeholder="Email atual" required/><br/>
						<label class="description">Novo Email</label><br/>
						<input id="newemail" class="newemail" type="email" maxlength="64" placeholder="Novo Email" required/><br/>
						<input id="btn_guardar_p" class="btn_guardar_p" type="submit" name="btn_guardar_p" value="Guardar" />
					</form></center>
				</div>
			</div>
		</div>
	</div>
	<?php
		include_once "footer.php"; 
	?>
	