<?php
session_start();
include_once("conn.php");

$data = $_POST;
    
if (!empty($data)){
  

    if (isset($data["submit"])) {

        $name = $data["name"];
        $password = $data["password"];
        $pass_confirm = $data["pass_confirm"];

        $insert = "INSERT INTO usuario(name,password)
        VALUE (:name,:password)";

        $stmt = $conn->prepare($insert);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":password", md5($password));

        try {
            $stmt->execute();

        } catch(PDOException $e){

            echo "Erro:" . $e->getMessage();
        }
        if ($password == $pass_confirm) {
            header("location:http://localhost/Projeto1/Templates/login.php");
            die();
        }else{
            $_SESSION["msn_erro"] = "As senhas devem ser iguais !";
            header("location:http://localhost/Projeto1/Templates/cadastro.php");
            die();
        }
    }
}


//Fecha conexão;
$conn = null;   