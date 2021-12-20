<?php
include_once("conn.php");

$imagem = $_FILES;

if(!empty($imagem)){

$imagem = $_FILES["foto"];

        if(isset($imagem["name"])){
        
        // Concatena o nome criptografado com um numero randomico
        $nameImagem= md5($imagem["name"] . rand(0,9999));
        //Volta as casas para colocar os tipos EX:PNG,JPG E OUTROS;
        $type = substr($imagem["name"], -4);
        // Concatenar o tipo com o nome
        $nomeCompleto = "{$nameImagem}{$type}";
        // Rota para guardar a imagem
        $route = $imagem["tmp_name"];
        //Move o arquivo para um diretorio
        move_uploaded_file($route, "../img/{$nomeCompleto}");
    
    //Inserção no banco
        $data = $_POST;
        $produto = $data["produto"];    
        $sql = "INSERT INTO fotos(name,imagem) VALUES (:produto, :foto)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":produto", $produto);
        $stmt->bindParam(":foto", $nomeCompleto);
        
        try {
            $stmt->execute();
        } catch(PDOException $e){
            echo "Erro:" . $e->getMessage();
        }
        header("location:http://localhost/Projeto1/templates/index.php");
    }
}


//Fecha conexão;
$conn = null;  