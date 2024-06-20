<?php
require 'database.php';
$statment = $pdo->prepare('SELECT * FROM client');
$statment->execute();
$clients = $statment->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:white;
  background-color:white;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: white;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px grey;
	   -moz-box-shadow: 0 2px 2px -2px grey;
	        box-shadow: 0 2px 2px -2px grey;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 85%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

svg{
    width: 25px;
    margin: 0px 20px;
    cursor: pointer;
}
.th{
    width: 50px;
}
a{
    text-decoration:none;
    color: #0648f0;
}
    </style>
</head>
<body>
    <h1>Table Stagiaires</h1>

<form action="" method="GET">
   
<table class="container">
	<thead>
		<tr>
			<th class="th"><h1>ID</h1></th>
			<th><h1>nom</h1></th>
			<th><h1>prenom</h1></th>
            <th><h1>cin</h1></th>
            <th><h1>Supprimeir Ou Modifier Les Informations</h1></th>
		</tr>
	</thead>
	<tbody>
    <a href="ajouter.php" name="id">Ajouter</a>
        <?php foreach($clients as $client){ ?>
            <tr>
                <td><?php echo $client['id_client']; ?></td>
                <td><?php echo $client['nom']; ?></td>
                <td><?php echo $client['prenom']; ?></td>
                <td><?php echo $client['cin']; ?></td>
                <td class="text-dark bg-light"><span><a href="supprimer.php?id=<?php echo $hotel['id_hotel'];?>" name="id" onclick="return confirm('voler vous vraiment supprimer le lients ?')">Supprimer</a></span><span><a href="supprimer.php?id=<?php echo $hotel['id_hotel'];?>" name="supprimer"></a></span></td>
            </tr>
        <?php } ?>
	</tbody>
</table>
 
</form>

    
</body>
</html>
