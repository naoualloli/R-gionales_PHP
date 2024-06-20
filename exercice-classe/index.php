<?php
session_start();

if(!isset($_SESSION['logUser'])){
    header('location: connecter.php');
}else{


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin{
            height: 400px;
            width: 100%;
            background-color:#45a049;
        }
        .utilisateur{
            height: 400px;
            width: 100%;
            background-color:#8b0000;
        }
    </style>
</head>
<body>
    <?php if($_SESSION['logUser']['role'] == 'admin'): ?>
    <div class="admin">Bienvenu admin</div>
    <?php else: ?>
    <div class="utilisateur">Bienvenu utilisateur</div>
    <?php endif; ?>
</body>
</html>

<?php
}
?>