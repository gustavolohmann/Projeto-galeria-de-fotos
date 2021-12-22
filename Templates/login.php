<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
	<title>Login-ProjetosFotos</title>
</head>
<body class="body_principal">
	<div class="form">
		<div class="titulo_principal">
			<h1>Login</h1>	
		</div>
		<form action="../config/process.php" method="GET">
			<div class="inp_login">
				<input type="text" name="user" id="user" placeholder="Digite seu nome">
				<input type="password" name="password" id="password" placeholder="Digite sua senha">
			</div>
			<div class="btn-submit">
				<button type="submit" name="enviar" id="submit">Entrar</button>
			</div>
			<div class="link_create">
				<p>Não tem cadastro <a href="cadastro.php">Clique aqui para se cadastra</a></p>
			</div>
		</form>
	</div>
</body>
</html>