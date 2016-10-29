<?php
	require_once 'connection.php';
	require_once 'finishsession.php';
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<title>Gerenciador de Notícias</title>
	<link rel="shortcut icon" href="_images/logo.png">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css" media="screen" />
	<script type="text/javascript" src="_js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="_js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="_js/default.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		height: "900",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
</head>
<div id="interface">
		<header id="cabecalho">
		<!--<img id="logo" src="_images/logo.png">-->
		<a href="index.html">
			<img id="logo" src="_images/minilogo.png" onMouseOver="this.src='_images/logohover.png'" onMouseOut="this.src='_images/minilogo.png'">
		</a>
		<div id="inicio">
			<h1>Gerenciador de Notícias</h1>
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

		<div id="topo">	
				
</div>
	<main id="manager-main">
		<section id="wrapper">
			
			<section id="content-panel">
			
			<section id="submenu">
				<?php
					@$SQL_RS = mysql_query("SELECT status FROM noticias WHERE status=0");
					$SQL_TN = mysql_query("SELECT status FROM noticias WHERE status=1");					
					$SQL_LX = mysql_query("SELECT status FROM noticias WHERE status=2");

					$CNT_RS = mysql_num_rows($SQL_RS);
					$CNT_TN = mysql_num_rows($SQL_TN);
					$CNT_LX = mysql_num_rows($SQL_LX);

				?>
				<ul>
					<li class="activeColor">Publicar notícia</li>
					<li>Todas as notícias <?php if($CNT_TN !=0) : echo "($CNT_TN)"; endif; ?></li>
					<li>Rascunhos <?php if($CNT_RS !=0) : echo "($CNT_RS)"; endif; ?></li>
					<li>Lixeira <?php if($CNT_LX !=0) : echo "($CNT_LX)"; endif; ?></li>
				</ul>
			</section>
			
			<section id="publicar-noticia">
					
				<form action="newspost.php" method="POST" enctype="multipart/form-data">
				<section id="publicar-noticia-left">
					<table>
					<tbody>
						<tr>
							<td><input type="text" name="titulo-noticia" placeholder="Coloque o título aqui" /></td>
						</tr>
						<tr>
							<td><textarea name="conteudo-noticia" id="maxW"></textarea></td>
						</tr>
					</tbody>	
				</table>		
				</section>
					<section id="publicar-noticia-right">
						
						<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td align="left"><input type="submit" name="publicar" value="Publicar Notícia" /></td>
										<td align="right"><input type="submit" name="salvar-rascunho" value="Salvar Notícia" /></td>
									</tr>
									<tr>
										<td>Data Publicação:</td>
										<td align="right"><?php echo date("d/m/Y"); ?></td>
									</tr>
									<tr>
										<td>Autor:</td>
										<?php 
											while ($linha = mysql_fetch_assoc($SQL) ) {
												$nomeUser = $linha['Nome'];
											}
										?>
										<td align="right"><?php echo $nomeUser; ?></td>
									</tr>
								</tbody>
							</table>
						</section>
						
						<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td>Tags de Pesquisa</td>
									</tr>
									<tr>
										<td><input type="text" name="tags-pesquisa" placeholder="Digite suas tags de pesquisa" /></td>
									</tr>
									<tr>
										<td id="tags-escolhidos"></td>
									</tr>
								</tbody>
							</table>
						</section>
						
							<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td>Imagem da Notícia</td>
									</tr>
									<tr>
										<td>
											<input type="text" id="imagem-noticia-carregar" placeholder="Selecione a imagem da sua notícia" />
											<input type="file" hidden id="imagem-carregada" name="imagem-noticia" /></td>
									</tr>
								</tbody>
							</table>				
						</section>
						
						<section id="publicar-nota-informacoes">
							<table>
								<tbody>
									<tr>
										<td>Categoria da Notícia</td>
									</tr>
									<tr>
										<td>
											<select name="categoria-noticia">
												<option	selected="selected" value="">Selecione uma Categoria</option>
           </select>
										</td>
									</tr>
								</tbody>
							</table>				
						</section>
						
					</section>
						  </form>
			</section>
			
			</section> <!-- contentcontent-panel -->
				
		</section> <!-- Wrapper -->

		<section id="logout-section">
			<?php
				while ($linha = mysql_fetch_assoc($SQL) ) {
					$nomeUser = $linha['Nome'];
				}

			?>
			<h4>Olá, <?php echo $nomeUser; ?> <br /></h4>
			<a href="logout.php">Logout</a>
		</section>
		
	</main>

	<footer>
		<p>
			<a href="https://www.facebook.com/thebullsfc/" target="_black">Facebook</a> | 
			<a href="https://twitter.com/" target="_black">Twitter</a>
		</p>
	</footer>

	</div>
</hmtl>