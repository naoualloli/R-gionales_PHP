<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $destination = $_POST['destination'];
    $nombreBillet = $_POST['nombreBillet'];
    $prix = 2000;

    if(!empty($nombreBillet) && !empty($destination)){
        $prixTotal = $nombreBillet * $prix;

        if($destination == "London"){
            $prixTotal = $prixTotal - ($prixTotal * 0.1);
        }
        if($nombreBillet > 5){
            $prixTotal = $prixTotal - ($prixTotal * 0.05);
        }

        echo 'le prix total est : ' . $prixTotal . 'DH';
    }
}