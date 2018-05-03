<?php
	
	include_once "bd.php";

	$nome = htmlspecialchars($_POST['nome']);
	$user = $_POST['user'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$pw = $_POST['pw'];

	$sql = "SELECT username FROM login WHERE username='$user'";

	$db->query($sql) or die (mysqli_error($db));

	if ($db->affected_rows > 0) {
		echo "já existe um utilizador com este username!";
	} else {
		$pwmd5 = md5($pw);
		$db->query("INSERT INTO login (nome, idade, username, email, password) VALUES ('$nome', $idade, '$user', '$email', '$pwmd5')");
		echo "Utilizador criado com sucesso!";
		header('location: ../index.php?sucesso');
	}
	


?>