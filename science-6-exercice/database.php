<?php 

$host = 'localhost';
$port = 3306;
$dbName = 'blog';
 
$user = 'root';
$password = '';
 
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";
 
try {
 
    $pdo = new PDO($dsn, $user, $password);

 
} catch (PDOException $e) {
    echo 'Connection Failed : ' . $e->getMessage();
}
 
 
