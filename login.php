<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="shortcut icon" href="_images/logo.png">
		<link rel="stylesheet" type="text/css" href="_css/estilo.css" />
	</head>
	<body id="login-body">
		<div id="login">
			<img src="_images/minilogo.png">
			<form action="user-login.php" method="POST">
				<p class="form-group">
					<label for="user">Usuário</label>
					<input class="field" type="text" id="user" name="user" placeholder="Usuário" required="required" size="70" >
				</p>
				<p class="form-group">
					<label for="password">Senha</label>
					<input class="field" type="password" id="password" name="password" placeholder="Senha" required="required">
				</p>
				<p class="form-group">
					<input type="submit" class="button" value="Entrar">
				</p>
			</form>
		</div>
	</body>
</hmtl>