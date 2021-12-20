<?php
session_start();

/*Tela de login */
function UserAcess(){
    include_once("conn.php");
    $global = $_GET;

    if (!empty($global)) {

        if (isset($global["enviar"])){

            $sql = "SELECT * FROM usuario WHERE name = :name AND password = :password";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":name", $global["user"]);
            $stmt->bindParam(":password", $global["password"]);
            
            try {
                $stmt->execute();
            } catch(PDOException $e){
    
                echo "Erro:" . $e->getMessage();
            }

            $stmt->rowCount();
        }
        if ($stmt != 0) {
            $_SESSION["name"] = $global["user"];
            header("location:http://localhost/Projeto1/templates/index.php");
            die();
        } else {
            header("location:http://localhost/Projeto1/templates/login.php");
            die();
        }
    }
}
return UserAcess();

//Fecha conexão;
$conn = null;   