<?php
	require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Bulls</title>
	<link rel="shortcut icon" href="_images/logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="_js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="_js/jquery.cycle2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css" />
</head>
<body> <!--onLoad="slide1()"-->
<div id="interface">
	<header id="cabecalho">
	<!--<img id="logo" src="_images/logo.png">-->
	<a href="index.html">
		<img id="logo" src="_images/minilogo.png" onMouseOver="this.src='_images/logohover.png'" onMouseOut="this.src='_images/minilogo.png'">

	</a>
	<div id="inicio">
		<h1>Bulls</h1>
		<!--<h2>Cuidado que a manada está passando</h2>-->
	</div>

		<nav id="menu">

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="historia.html">História</a></li>
				<li><a href="noticias.php">Notícias</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
		</nav>

	</header>
	
		<section>
			<!--<div id="image-center">
				<img id="slide" src="_images/image8.png" alt="Equipe Bulls">
				http://www.blog.wlconsultoria.net/criar-slide-imagens-jquery/
							
			</div>-->
			<div class="cycle-slideshow">
				    <img src="_images/crops/image1.png">
				    <img src="_images/crops/image2.png">			    
				    <img src="_images/crops/image3.png">
			</div>	
		</section>
		
		<article id="content">
			<h2>Sobre o Bulls</h2>
			<p>O Bulls é uma equipe de futebol universitária formada pelos alunos do curso de Sistemas de Informação da PUC em março de 2014.</p>
			<p>Time foi fundado em outubro de 2013 apenas por robi, mas o mini projeto foi tomando proporções maiores, e hoje é um dos grandes times universitários de Belo Horizonte. Onde é sediado a maioria dos jogos e campeonatos que o Bulls participa.</p>
			<p>O time tem a Icone como fornecedora de seus materiais esportivos, desde maio de 2015, onde foi fechado o contrato oficial. O uniferme princiapal é da cor azul escuro, bermuda e meião brancos; segundo que o segundo uniforme é todo branco.</p>
			<p>O Bulls já participou de dois campeonatos até o momento: 0 campeonato DCE da PUC Barreiro e o campeonato universitário da rádio Itatiaia; além dos diversos amistosos que tem participado.</p>
			<p>A maoria de seus atletas são estudades da PUC, porém esxistem atletas de fora, que formam a equipe para somar, e aujudar a mesma a conquistar mais e mais. O Bulls está a cada dia projetando o futuro e trabalhando para o melhor para o seu coletivo, pensando não somente no profissional, mas na parceria e no individual de cada participante do grupo.</p>
			<p>Bulls não é apenas um time, Bulls é um família</p>			

			<h2>Próximos Jogos</h2>
			<table id="tabledate">
			<caption>Disputas do Bulls</caption>
			<tr><td class="cleft">Dia 07/10/2016</td><td class="cmiddle">Velotrol</td><td class="cright">x</td><td class="cright">Bulls</td></tr>
			<tr><td class="cleft">Dia 14/10/2016</td><td class="cmiddle">Bulls</td><td class="cright">x</td><td class="cright">Hot Boys</td></tr>
			<tr><td class="cleft">Dia 21/10/2016</td><td class="cmiddle">Fut Rock</td><td class="cright">x</td><td class="cright">Bulls</td></tr>
			<tr><td class="cleft">Dia 28/10/2016</td><td class="cmiddle">Bulls</td><td class="cright">x</td><td class="cright">Renegados</td></tr>
			</table>
		</article>		
	
		<aside id="sidebar">
			<h2>Útimas Notícias</h2>
			<?php 
				$SQL_NP = mysql_query("SELECT titulo, id_noticia FROM noticias order by id_noticia desc");

				while ($nt = mysql_fetch_array($SQL_NP)) {
				
			?>		
			<p><a href="noticiapublicada.php?id=<?php echo $nt['id_noticia']; ?>"  target="_blank"><?php echo $nt['titulo']; ?></a></p>
			<?php } ?>
			<!--<p><a href="noticias.html"  target="_blank">Bulls tem jogo disputado no campeonato universitário da rádio Itatiaia.</a></p>
			<p><a href="noticias.html"  target="_blank">Bulls ganha clássico contra o Hot Boys.</a></p>
			<p><a href="noticias.html"  target="_blank">Mediante temporal, clássico é adiado para a próxima semana.</a></p>
			<p><a href="noticias.html"  target="_blank">Presidente Fabrício Oliveira negocia contratação de novo zagueiro.</a></p>
			<p><a href="noticias.html"  target="_blank">Bull preparado para o campeonato da rádio Itatiaia.</a></p>
			<p><a href="noticias.html"  target="_blank">Saiu a tabela dos jogos do campeonato da PUC.</a></p>
			<p><a href="noticias.html"  target="_blank">Fabrício Oliveira inicia acordo para nova casa do Bulls.</a></p>
			<p><a href="noticias.html"  target="_blank">ChurrasBulls confirmado pra esse sábado.</a></p>
			<p><a href="noticias.html"  target="_blank">Bulls inicia preparação física.</a></p>
			<p><a href="noticias.html"  target="_blank">Casa do Bulls interditada para reformas.</a></p>
			<p><a href="noticias.html"  target="_blank">Seja sócio torcedor, Bulls Forever.</a></p>-->
		</aside>	
	
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
