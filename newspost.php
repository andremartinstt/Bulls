<?php
	session_start();

	require_once 'connection.php';
	require_once 'finishsession.php';

	$titulo = $_POST["titulo-noticia"];
	$conteudo = $_POST["conteudo-noticia"];
	$dataPub = date("y-m-d");
	$autorPub = $_SESSION["Usuario"];
	$tagsSear = $_POST["tags-pesquisa"];

	// Selecionado autor da notícia

	$autorPub = $_SESSION["Usuario"];
	$autorSen = $_SESSION["Senha"];

	$SQL_AU = mysql_query("SELECT id, Nome FROM administradores WHERE usuario='$autorPub' AND senha='$autorSen' ");

	while ($ath = mysql_fetch_assoc($SQL_AU)) {
		$autorN = $ath["Nome"];
		$idAutor = $ath["id"];
	}

	// Configuração da imagem

	$imagem = $_FILES["imagem-noticia"];
	$destino = "_images/news-images/".$imagem['name'];

	if (isset($_POST["salvar-rascunho"])) { // Se existir o POST
		
		mysql_query("INSERT INTO noticias (id_noticia, titulo, dataPub, autorPub, id_autor, tags, conteudo, imagem, status)
					VALUES (0, '$titulo', '$dataPub', '$autorN', '$idAutor', '$tagsSear', '$conteudo', '".$imagem['name']."', 0)");

		if ($imagem['type'] == "image/jpeg" || $imagem['type'] == "image/png") {
			move_uploaded_file($imagem['tmp_name'], $destino);
		}

		header("Location: newsmanager.php");
	}

	if ($imagem['type'] == "image/jpeg" || $imagem['type'] == "image/png") {

		mysql_query("INSERT INTO noticias (id_noticia, titulo, dataPub, autorPub, id_autor, tags, conteudo, imagem, status)
					VALUES (0, '$titulo', '$dataPub', '$autorN', '$idAutor', '$tagsSear', '$conteudo', '".$imagem['name']."', 1)");

		move_uploaded_file($imagem['tmp_name'], $destino);
		
		header("Location: newsmanager.php");
	}

?>