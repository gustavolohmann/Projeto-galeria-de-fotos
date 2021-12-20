<?php
    session_start();
    include_once("../config/conn.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
    <title>Cadastro-ProjetoFotos</title>
</head>
<body>
    <div class="btn-back">
        <a href="login.php">
            <button type="button" name="back">Voltar</button>
        </a>
    </div>
    <form action="../config/cadastro.php" method="POST">
    <div class="titulo">
        <h1>Cadastre-se para se juntar a nós</h1>
    </div>
    <div class="cad-form">
        <div>
            <input type="text" name="name" id="name" placeholder="Qual o seu nome" require>
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" require>
        </div>
        <div>
            <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirme sua senha">
        </div>
        <div>
            <button type="submit" name="submit">Cadastar</button>
        </div>
    </div>
    </form>
</body>
</html>