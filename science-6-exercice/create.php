
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-gray-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">DEV Blog</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Blog Post</h1>
      <form method="post" action="traitement.php">
      <div class="mb-4">
          <label for="id" class="block text-gray-700 font-medium">id</label>
          <input type="text" id="id" name="id" placeholder="Saisir le titre" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-4">
          <label for="titre" class="block text-gray-700 font-medium">titre</label>
          <input type="text" id="titre" name="titre" placeholder="Saisir le titre" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="content" class="block text-gray-700 font-medium">Contenu</label>
          <textarea id="content" name="content" placeholder="Saisir le contenu" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Enregistrer
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>