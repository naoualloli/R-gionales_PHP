<?php
require 'database.php';
$id = $_GET['id'];
$statment = $pdo->prepare('DELETE FROM hotel WHERE id_hotel = :id');
$statment->execute([
    ':id' => $id
]);

header('location:lesterH.php');
