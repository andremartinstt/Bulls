<?php

	// Usar $_POST caso necessário

	$to = "n.y.andre2@gmail.com, vacoliveira@sga.pucminas.br";
	$subject = "Contato pelo site Bulls";

	$nome = $_REQUEST['nome'];
	$tel = $_REQUEST['telefone'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['mensagem'];

		$body = "<strong>Mensagem de Contato</strong><br>";
		$body .= "<br><strong>Nome: </strong> $nome"; // .= significa concatenado com a variável acima
		$body .= "<br><strong>Telefone: </strong> $tel";
		$body .= "<br><strong>E-mail: </strong> $email";
		$body .= "<br><strong>Mensagem: </strong> $msg";

		$header = "Content-Type: text/html; charset=utf8\n";
		$header .= "From: $email Reply-yo: $email\n";		

	@mail($to, $subject, $body, $header);

	header("location:contato.php?msg=enviado");	
	/* echo $nome."<br>";
	echo $tel."<br>";
	echo $email."<br>";
	echo $msg; */

?>