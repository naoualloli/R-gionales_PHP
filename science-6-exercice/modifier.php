<?php
require('database.php');
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['save'])) {
    $statement = $pdo->prepare('UPDATE posts SET titre = :titre, content = :content WHERE id = :id');
    $statement->execute([
        ':titre' => $_POST['titre'],
        ':content' => $_POST['content'],
        ':id' => $_POST['id']
        
    ]);
    
    header('Location:index.php');


}