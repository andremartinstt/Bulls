<?php 
	require_once 'connection.php';
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
			<article id="content">
				<?php 
					//$id_rn = $_GET["id"];
					$SQL_RN = mysql_query("SELECT * FROM noticias");

					while ($rn = mysql_fetch_array($SQL_RN)) {
						$data = explode("-", $rn["dataPub"]);
						$dataEx = $data[2]."/".$data[1]."/".$data[0];
					
				?>
				<h1><?php echo $rn["titulo"]; ?></h1>
				<p>Data publicação: <?php echo $dataEx; ?> Autor: <?php echo $rn["autorPub"]; ?></p>
				<img src="_images/news-images/<?php echo $rn["imagem"] ?>" alt="<?php echo $rn["titulo"]; ?>">
				<?php echo $rn["conteudo"]; ?>
				<strong>Tags: </strong> <?php echo $rn["tags"]; ?>
				<?php } ?>
			</article>
		</div>
	</body>
</html>