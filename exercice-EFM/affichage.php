<?php
$id = $_GET['id'];
require 'database.php';
$statment = $pdo->prepare('SELECT * FROM clientes where id = :id');
$statment->execute([
    ':id' => $id
]);

$post = $statment->fetch(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-8"><div id="message" class="col-8 text-light bg-dark">Bonjour <?php echo $post['nom'] ?> !</div></div>
                    
                    <button class="btn btn-primary col-4">+ ajouter votre information</button>
                </div>
                <h2 id="h2">Voila votre information !</h2>
                <table class="table mt-4 " id="table-employe">
                    <tr>
                        <th class="text-light bg-dark col-5">Nom</th><td class="text-dark bg-light col-7"><?php echo $post['nom']; ?></td>
                    </tr>

                    <tr>
                        <th class="text-light bg-dark">Prenom</th><td class="text-dark bg-light"><?php echo $post['prenom']; ?></td>
                    </tr>

                    <tr>
                        <th class="text-light bg-dark">Age</th><td class="text-dark bg-light"><?php echo $post['age']; ?></td>
                    </tr>

                    <tr>
                        <th class="text-light bg-dark">Supprimeir Ou Modifier Les Informations</th><td class="text-dark bg-light"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg></span><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></span></td>
                    </tr>
                </table>
            </div>
            <div class="col-3 bg-light" id="box">
                <div id="box-1">
                    <div id="personne"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#939393" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></div>
                    <div id="info">
                        <h5><?php echo $post['nom'] ?></h5>
                        <p><?php echo $post['email'] ?></p>
                    </div>
                
                </div>
                
                <hr>
                <div id="box-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg><span>Modifier la photo</span></div>
                <div id="box-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#919191" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg><span>Modifier le mot de passe</span></div>
            </div>
            
        </div>
        

    </div>
</body>
</html>