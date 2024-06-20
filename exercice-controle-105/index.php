



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Exercice</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="from-box">
            <h1 id="title">Sing Up</h1>
            <form action="traitment.php" method="POST">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <input type="text" placeholder="nom" name="nom">
                    </div>

                    <div class="input-field" id="nameField">
                        <input type="text" placeholder="prenom" name="prenom">
                    </div>

                    <div class="input-field" id="nameField">
                        <input type="text" placeholder="destination" name="destination">
                    </div>


                    <div class="input-field">
                        <input type="number" placeholder="nombre de billét" name="nombreBillet">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="btn-field">
                    <button type="submit" id="ajouter" name="ajouter">ajouter</button>
                </div>
                
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>