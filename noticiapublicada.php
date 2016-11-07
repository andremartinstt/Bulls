<?php 
	require_once 'connection.php';
	require_once 'finishsession.php';
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Notícias</title>
		<link rel="shortcut icon" href="_images/logo.png">
		<link rel="stylesheet" type="text/css" href="_css/estilo.css" />
	</head>
	<body>
		<div id="interface">
			<header id="cabecalho">
			<!--<img id="logo" src="_images/logo.png">-->
			<a href="index.html">
				<img id="logo" src="_images/minilogo.png" onMouseOver="this.src='_images/logohover.png'" onMouseOut="this.src='_images/minilogo.png'">
			</a>
			<div id="inicio">
				<h1>Notícias</h1>
			<!--<h2>Cuidado que a manada está passando</h2>-->
			</div>

				<nav id="menu">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="historia.html">História</a></li>
						<li><a href="noticias.php">Notícias</a></li>
						<li><a href="galeria.html">Galeria</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</nav>	

			</header>
			<article id="content-news">
				<?php 
					$id_rn = ($_GET["id"] != "") ? $_GET["id"] : "";

					if($id_rn != ""){

					$SQL_RN = mysql_query("SELECT * FROM noticias WHERE id_noticia='$id_rn'");

					while ($rn = mysql_fetch_array($SQL_RN)) {
						$data = explode("-", $rn["dataPub"]);
						$dataEx = $data[2]."/".$data[1]."/".$data[0];
					
				?>
				<section id="titulo-noticia"><h1><?php echo $rn["titulo"]; ?></h1></section>
				<section id="data-noticia"><p>Data publicação: <?php echo $dataEx; ?> Autor: <?php echo $rn["autorPub"]; ?></p></section>
				<section id="imagem-noticia"><img src="_images/news-images/<?php echo $rn["imagem"] ?>" alt="<?php echo $rn["titulo"]; ?>"></section>
				<section id="conteudo-noticia"><?php echo $rn["conteudo"]; ?></section>
				<section id="tags-noticia"><strong>Tags: </strong> <?php echo $rn["tags"]; ?></section>
				<?php } }else { ?>
					<h1>Página não existe!</h1>
				<?php } ?>
			</article>
			<footer>
				<p>
					<a href="https://www.facebook.com/thebullsfc/" target="_black">Facebook</a> | 
					<a href="https://twitter.com/" target="_black">Twitter</a>
				</p>
			</footer>
		</div>
	</body>
</html>