<!--<?php session_start(); 

require_once 'configuration.php';

$Usuario = $_SESSION['Usuario'];
$Senha = $_SESSION['Senha'];

$SQL = mysql_query("SELECT Nome, imgPerfil FROM administradores WHERE Usuario='$Usuario' AND Senha='$Senha' ");

echo $nome;

?>-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Painel de Controle</title>
	<link rel="shortcut icon" href="_images/logo.png">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css" />
</head>
<div id="interface">
		<header id="cabecalho">
		<!--<img id="logo" src="_images/logo.png">-->
		<a href="index.html">
			<img id="logo" src="_images/minilogo.png" onMouseOver="this.src='_images/logohover.png'" onMouseOut="this.src='_images/minilogo.png'">
		</a>
		<div id="inicio">
			<h1>Painel de Controle</h1>
			<!--<h2>Cuidado que a manada está passando</h2>-->
		</div>

			<nav id="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="historia.html">História</a></li>
					<li><a href="noticias.html">Notícias</a></li>
					<li><a href="galeria.html">Galeria</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</nav>	

		</header>

		<div id="topo">
				
	<!--<div id="logo"><img src="imagens/logo.png" alt="Painel de Controle" /></div>
				
		<div id="right">
				
			<div id="mensagem">
				<?php

					while ($linha = mysql_fetch_assoc($SQL) ) {
						$nomeUser = $linha['Nome'];
						$imgUser = $linha['imgPerfil'];
					}

				?>
				Olá, <?php echo $nomeUser; ?> <br />
				<a href="#">Postar Notícia</a> - <a href="#">Alterar Perfil</a> - <a href="logout.php">Sair da Conta</a>
			</div>
					
		<div id="foto-perfil"><img src="imagens/perfil/default.png" alt="Imagem de Perfil" width="85" height="85" /></div>
					
	</div>-->
				
</div>
	
<main>
		
	<section id="wrapper">
			
		<section id="content-panel">
			
		<section id="contagem">
				
			<table>
				<tbody>
					<tr>
						<td class="table-marc">Notícias Publicadas</td>
						<td class="table-val">250</td>
						<td>&nbsp;</td>
						<td class="table-marc">Comentários Aprovados</td>
						<td class="table-val">145</td>
					</tr>
					<tr>
						
					<td class="table-marc">Categorias Ativas</td>
						
					<td class="table-val">30</td>
						
					<td>&nbsp;</td>
						
					<td class="table-marc">Comentários Novos</td>
						
					<td class="table-val">25</td>
					
				</tr>							
				
			</tbody>
			
		</table>
				
		
	</section>
		
	
<section id="nota-rapida">
			
		
	<h1>Publicar Nota Rápida</h1>
			
		
	<form action="#" method="POST">
		
	<table>
			
		<tbody>
				
			<tr><td>Titulo da Postagem</td></tr>
				
			<tr><td><input type="text" name="titulo-postagem" required="required" /></td></tr>
				
			<tr><td>Descrição da Nota</td></tr>
				
			<tr><td><textarea name="descricao-nota" required="required" ></textarea></td></tr>
				
			<tr><td>Tags de Pesquisa</td></tr>
				
			<tr><td><input type="text" name="tags-pesquisa" required="required" /></td></tr>
				
			<tr><td><input type="submit" name="publicar-nota" value="Publicar Nota" /></td></tr>
			
		</tbody>				
		
	</table>
		
	</form>
			
	
</section> <!-- Nota Rápida -->
		
	
<section id="links-ultimas-noticias">
			
		
	<h1>Últimas Notícias</h1>
			
		
	<ul>
			
		<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
			
		<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
			
		<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
			
		<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
			
		<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
			
		<li>Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD Noticia numero 1 do portal WVD</li>
		
	</ul>
			
	
</section>
			
		
	</section> <!-- Content -->
				
	
</section> <!-- Wrapper -->
		
</main>

	
	<footer>
		<p>
			<a href="https://www.facebook.com/" target="_black">Facebook</a> | 
			<a href="https://twitter.com/" target="_black">Twitter</a>
		</p>
	</footer>

	</div>
</hmtl>