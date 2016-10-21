<?php
	session_start();

	$titulo = $_POST["titulo-noticia"];
	$conteudo = $_POST["conteudo-noticia"];
	$dataPub = date("y-m-d");
	$autorPub = $_SESSION["Usuario"];
	$tagsSear = $_POST["tags-pesquisa"];

	$imagem = $_FILES["imagem-noticia"];
	$destino = "_images/news-images/".$imagem['name'];

	if ($imagem['type'] == "image/jpeg") {
		move_uploaded_file($imagem['tmp_name'], $destino);
	}

?>