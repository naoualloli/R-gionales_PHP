<?php

$isValidSearch = $_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']);

echo isset($_GET['id']);

if($isValidSearch){
  
    require 'database.php';

    $statement = $pdo -> prepare("SELECT * FROM posts WHERE id = :id");

    $statement->execute([
        ':id' => $_GET['id']
    ]);
  

    $post = $statement->fetch(PDO::FETCH_ASSOC);
   
  }else{
    header('Location:index.php');
    exit;
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Blog</title>
</head>

<body class="bg-gray-100">
  <header class="bg-gray-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">DEV Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h1 class="font-bold text-yellow-500"><?php echo $post['titre'];?>
          <p class="text-gray-700 text-lg mt-2"><?php echo $post['content'];?></p>
          <form action="supprimer.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <input type="hidden" name="_method" value="delete">
                <input type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" value="Supprimer">
            </form>
            <form action="modification.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <input type="hidden" name="_method" value="update">
                <input type="submit"  class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" value="Modifier">
            </form>
        </div>
        
      </div>
    </div>
    
  </div>
</body>

</html>