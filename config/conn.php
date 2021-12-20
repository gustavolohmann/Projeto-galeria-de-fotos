<?php

    $host = "localhost";
    $user = "root";
    $dbname = "projetofotos";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    }catch(PDOException $e){
        echo "Connection failed:" . $e->getMessage();
    }
    