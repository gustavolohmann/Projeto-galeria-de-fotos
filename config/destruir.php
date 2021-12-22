<?php

session_start();
session_destroy();
unset( $_SESSION["name"] );
header("location:http://localhost/Projeto-Galeria-de-Fotos/templates/login.php");