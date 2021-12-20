<?php

session_start();
session_destroy();
unset( $_SESSION["name"] );
header("location:http://localhost/Projeto1/templates/login.php");