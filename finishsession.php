<?php 
 	session_start();

 	$Usuario = $_SESSION['Usuario'];
	$Senha = $_SESSION['Senha'];

	$SQL = mysql_query("SELECT Nome FROM administradores WHERE Usuario='$Usuario' AND Senha='$Senha' ");

 	if (!isset($_SESSION["Usuario"]) || !isset($_SESSION["Senha"])) { # Se a sessão de email e senha estiverem desativadas
 		header("Location: login.php");
 		exit;
 	} 
 ?>