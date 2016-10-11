<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "bulls";

	@$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());
 ?>

<html>
	<head lang="pt-br">
		<meta charset="UTF-8">
		<title>Autencicando usuário</title>
		<script type="text/javascript">
			function loginfailed(){
				setTimeout("window.location='login.php'", 4000);
			}
		</script>
	</head>
	<body>
		
	</body>
</html>	

<?php

	$user = $_POST['user'];
	$password = $_POST['password'];

	$sql = mysql_query("SELECT * FROM administradores WHERE Usuario = '$user' AND Senha = '$password'");
	$row = mysql_num_rows($sql);

	if ($row > 0) {
		session_start();
		$_SESSION['Usuario'] = $_POST['user'];
		$_SESSION['Senha'] = $_POST['password'];

		header("Location: controlpanel.php");

	} else {
		echo "Usuário ou Login incorretos. Aguarde um instante para tentar novamente!";
		echo "<script>loginfailed()</script>";
	}

?>