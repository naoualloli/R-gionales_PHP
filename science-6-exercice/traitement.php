<?php
    require ('database.php');
 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $identifiant = $_POST['id'];
        $titre = $_POST['titre'];
        $content = $_POST['content'];
 
        $statement = $pdo ->prepare('INSERT INTO posts(id, titre, content) VALUES (:id, :titre, :content)');
 
 
        $statement -> execute([
            ':id' => $identifiant,
            ':titre' => $titre,
            ':content' => $content,
        ]);
    }
 
 
    header("Location:index.php");
    exit();