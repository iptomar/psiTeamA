
	<?php
		session_start();
		include_once "php/bd.php";
		if($_SESSION["login"] === true) {
			include_once "headeron.php";
		} else {
			include_once "headeroff.php";
		}
			
	?> 
	<div class="conteudo">
		<div class="paineis">
			<div class="painel">
				<div class="header">Nome</div>
				<div class="content">
				<?php
					$sql = "SELECT nome FROM login" or die("Erro" . mysqli_error($db)); 
					$resultado = $db->query($sql); 
					while($row = mysqli_fetch_array($resultado)) { 
						echo '<div class="lista">';
		  				echo $row["nome"] . "<br>"; 
		  				echo '</div>';
					}
				?>
				</div>
			</div>
			<div class="painel">
				<div class="header">Username</div>
				<div class="content">
				<?php
					$sql = "SELECT username FROM login" or die("Erro" . mysqli_error($db)); 
					$resultado = $db->query($sql); 
					while($row = mysqli_fetch_array($resultado)) {
						echo "<a class='link' href='perfil.php'><div class='lista'>";
		  				echo $row["username"] . "<br>"; 
		  				echo '</div></a>';

					}
				?>
				</div>
			</div>
		</div>
	</div>
	<?php
		include_once "footer.php"; 
  
		if(isset($_GET['sucesso']))
		{
			echo "<script type=\"text/javascript\">
		    alert(\"Registo efetuado com sucesso!\");
		  	</script>";
		}
		if(isset($_GET['erro']))
		{
			echo "<script type=\"text/javascript\">
		    alert(\"Falha a fazer o registo.\");
		  	</script>";
		}

		if(isset($_GET['lsucesso']))
		{
			echo "<script type=\"text/javascript\">
		    alert(\"Login efetuado com sucesso!\");
		  	</script>";
		}
		if(isset($_GET['lerro']))
		{
			echo "<script type=\"text/javascript\">
		    alert(\"Falha a fazer o login.\");
		  	</script>";
		}
	?>
	