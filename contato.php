<?php
	$msg = 0;
	@$msg = $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contato</title>
	<link rel="shortcut icon" href="_images/logo.png">	
	<script type="text/javascript" src="_js/jquery-3.1.0.min.js"></script>
	<script src="_js/jquery.maskedinput.js" type="text/javascript"></script>
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
			<h1>Contato</h1>
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
		<?php if($msg==@enviado): ?>
			<h1></br>Mensagem enviada, agradecemos o contato!</br></br></br></h1>
		<?php else: ?>

		<section>
			<form class="form-contact" action="mailsend.php" method="POST">
				<h2 class="page-title">Entre em contato</h2>
				<p class="form-group">
					<label for="nome">Nome</label>
					<input class="field" type="text" id="nome" placeholder="Nome" required="required" name="nome" />
				</p>
				<p class="form-group">
					<label for="telefone">Telefone</label>
					<input class="field" type="text" id="tel" placeholder="(xx)xxxx-xxxx" name="telefone" />
				</p>
				<p class="form-group">
					<label for="email">E-mail</label>
					<input class="field" type="email" id="email" placeholder="E-mail" required="required" name="email" />
				</p>
				<p class="form-group">
					<label for="mensagem">Mensagem</label>
					<textarea class="field" type="text" id="msg" placeholder="Deixe sua mensagem" name="mensagem"></textarea>
				</p>
				<p class="form-group">
					<input type="submit" class="button" value="Enviar">
				</p>
			</form>
		</section>

		<?php endif; ?>
	
	<footer>
		<p>
			<a href="https://www.facebook.com/thebullsfc/" target="_black">Facebook</a> | 
			<a href="https://twitter.com/" target="_black">Twitter</a>
		</p>
	</footer>

	</div>
	<script src="_js/script.js"></script>
</body>
</html>