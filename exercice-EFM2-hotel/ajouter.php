


<!DOCTYPE html>
<html>
<head>
    <title>A Stagiaire</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background: #f3f3f3;
            flex-direction: column;
            margin: 0;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 500px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }

        input, select {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
            border: none;
            color: white;
            cursor: pointer;
            background-color: #4CAF50;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Inserer un Nouveau Stagiaire</h1>
        <form action="traitment.php" method="POST">
            
            <label for="titre">titre</label>
            <input type="text" id="titre" name="titre" placeholder="Entrer le titre">

            <label for="adresse">adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="Entrer l'adresse">

            <label for="prix_par_nuit">prix par nuit</label>
            <input type="text" id="prix_par_nuit" name="prix_par_nuit" placeholder="Entrer le prix par nuit">

            <label for="nombre_de_places">nombre de places</label>
            <input type="text" id="nombre_de_places" name="nombre_de_places" placeholder="Entrer le nombre de places">

            <button type="submit" name="ajouter">Ajouter</button>
        </form>
    </div>
</body>
</html>
