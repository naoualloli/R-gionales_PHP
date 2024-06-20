<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['info'])){ ?>
    <h1>Bonjour <?php echo $_SESSION['info']['nom']?>   votre CIN est :   <?php echo $_SESSION['info']['cin'] ?></h1>
    <?php }?>
</body>
</html>