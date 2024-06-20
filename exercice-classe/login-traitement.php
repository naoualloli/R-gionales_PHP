
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require 'database.php';

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    if(!empty($user) || !empty($pwd)){
        $statment = $pdo->prepare('SELECT * FROM employe WHERE user = :user AND pwd = :pwd');

        $statment->execute([
            ':user' => $user,
            ':pwd' => $pwd
        ]);

        $logUser = $statment->fetch(PDO::FETCH_ASSOC);

        if($logUser){
            $_SESSION['logUser'] = $logUser;
            header('location: index.php');
        }else{
            header('location: connecter.php');
        }
    }
}