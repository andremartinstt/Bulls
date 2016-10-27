<?php
	require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Notícias</title>
	<link rel="shortcut icon" href="_images/logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="_js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="_js/jquery.cycle.all.js"></script>
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
		<section id="other-content">
			<h2 class="page-title">Principais Notícias</h2>
			<div id="news">
				<?php
					$SQL_NT = mysql_query("SELECT * FROM noticias");

					while ($nt = mysql_fetch_array($SQL_NT)) {
				?>		
				
				<figure class="photo-news">
					<img src="_images/news-images/<?php echo $nt['imagem']; ?>" alt="<?php echo $nt["titulo"]; ?>" />
					<figcaption><?php echo $nt['titulo']; ?></figcaption>
				</figure>

				<?php } ?>
				<!--
				<figure class="photo-news">
					<img src="_images/used/no-image.png" />
					<figcaption>Notícia 2 do Bulls</figcaption>
				</figure>
				<figure class="photo-news">
					<img src="_images/used/no-image.png" />
					<figcaption>Notícia 3 do Bulls</figcaption>
				</figure>
				<figure class="photo-news">
					<img src="_images/used/no-image.png" />
					<figcaption>Notícia 4 do Bulls</figcaption>
				</figure>
			-->
			</div>
		</section>	
		<aside id="sidebar-news">
			<a href="login.php">Login</a>
		</aside>
		
	<footer>
		<p>
			<a href="https://www.facebook.com/thebullsfc/" target="_black">Facebook</a> | 
			<a href="https://twitter.com/" target="_black">Twitter</a>
		</p>
	</footer>

	</div>
</body>
</html>