<?php
	require_once 'configuration.php';

	$userName = $_POST["user"];
	$userPass = $_POST["password"];

	$SQL = mysql_query(" SELECT Usuario, Senha FROM administradores WHERE Usuario='$userName' AND Senha='$userPass' ");

	if (mysql_num_rows($SQL) != 0) {		
		
		$_SESSION['Usuario'] = $userName;
		$_SESSION['Senha'] = $userPass;

		header("Location: controlpanel.php");

	} else {
		echo "Login Incorreto";
	}
?>
