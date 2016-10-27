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
				
			</article>
		</div>
	</body>
</html>