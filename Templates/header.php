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
    <title>Index-ProjetoFotos</title>
</head>

<body>
    <?php
        if(!isset($_SESSION["name"])){

            header("http://localhost/Projeto-Galeria-de-Fotos/templates/login.php");
        }
    ?>
<form action="../config/destruir.php" method="GET">
     <div class="btn-logout">
        <button type="submit" name="btn-logout">logout</button>
    </div>
</form>
    <header>
        <div class="cabecalho">
            <?php if (isset($_SESSION["name"])) : ?>
                <a href="index.php">
                    <h2>Bem vindo, <?= $_SESSION["name"]; ?></h2>
                </a>
            <?php endif; ?>
        </div>

    </header>