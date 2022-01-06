<?php
    include_once("header.php");
    
    $produto = [];
    
    $query = "SELECT * FROM fotos";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<form enctype="multipart/form-data" action="../config/foto.php" method="post" >
<div>
    <div class="insert_pictures">
        <label for="foto">Add Fotos<i class="fas fa-images"></i></label>
        <p><input type="file" name="foto" id="foto" accept="image/*"></input></p>
        <button type="btn" name="Insert">Insert</button>
    </div>
</div>
</form>
<?php if(isset($produto)):?> 
<div class="image">
    <?php foreach($produto as $produtos):?>
            <img class="show-img"src = "http://localhost/Projeto-Galeria-de-Fotos/img/<?=$produtos["imagem"];?>" alt="Imagem">
    <?php endforeach;?>
</div>
<?php endif;?>  
<?php
    include_once("footer.php");
?>