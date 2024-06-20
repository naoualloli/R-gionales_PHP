<?php

require 'database.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajouter'])){
    $titre = $_POST['titre'] ;
    $adresse = $_POST['adresse'] ;
    $prix_par_nuit = $_POST['prix_par_nuit'] ;
    $nombre_de_places = $_POST['nombre_de_places'] ;

    if(!empty($titre) && !empty($adresse) && !empty($prix_par_nuit) && !empty($nombre_de_places)){
        $statment = $pdo->prepare('INSERT INTO hotel (titre,adresse,prix_par_nuit,nombre_de_places)VALUES(:titre,:adresse,:prix_par_nuit,:nombre_de_places)');
        $statment->execute([
            ':titre' => $titre,
            ':adresse' => $adresse,
            ':prix_par_nuit' => $prix_par_nuit,
            ':nombre_de_places' => $nombre_de_places
        ]);
        header('location:lesterH.php');
    }
}