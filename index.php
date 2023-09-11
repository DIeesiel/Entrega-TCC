<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="Maisuma2.0.png" type="image/x-icon">
	<title>System PTMS</title>
	<link rel="stylesheet" type="text/css" href="TelaLog.css">
</head>
<body>
	<div class="capa"></div>
	 <div id="login-container" class="login-box">
		<h1>Login</h1>
        <form method="post" action="autentica.php">
			<label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
			<label for="senha">Senha</label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
			<input type="submit" value="Login" name="enviado">
		</form> 
	 <div id="register-container">
        <p>Não possui um cadastro?</p>
        <a href="TelaCade.php">Cadastre-se</a>
	 </div>
	</div>
</body>
</html>