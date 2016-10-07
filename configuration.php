<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DBNAME", "bulls");

	@mysql_connect(HOST, USER, PASS) or die("Erro no Banco de Dados");
	mysql_select_db(DBNAME) or die("Banco de Dados Desconhecido");

?>