<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
  
    require 'database.php';

    $statement = $pdo -> prepare("SELECT * FROM posts");

    $statement->execute();
  

    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
   

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
        <?php foreach($posts as $post):?>
          <a href="post.php?id=<?php echo $post['id'];?>"><h1 class="font-bold text-yellow-500"><?php echo $post['titre'];?></a>
          <p class="text-gray-700 text-lg mt-2"><?php echo $post['content'];?></p>
        </div>
        <?php endforeach;?>
      </div>
    </div>
    
  </div>
</body>

</html>