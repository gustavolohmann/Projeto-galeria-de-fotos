<?php
session_start();

if(!isset($_SESSION["name"])){

    header("http://localhost/Projeto-Galeria-de-Fotos/templates/login.php");
}