<?php

  require 'data.php';
  
  $id = $_REQUEST['id'];

  $filtered = array_filter($books, fn($b) => $b['id'] == $id);

  $books = array_pop($filtered);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Wise</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<!-- Body of Page -->
<body class="bg-stone-950 text-stone-200">
  <header class="bg-stone-800">
    <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">

      <div class="font-bold text-xl tracking-wide"> Book Wise </div>

      <ul class="flex space-x-6 font-bold">
        <li><a href="" class="text-emerald-300">Explore</a></li>
        <li><a href="/my_books.php" class="hover:underline">My Books</a></li>
      </ul>

      <ul>
        <li><a href="/login.php"></a>Login</li>
      </ul>

    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-6">
    
    ID do Livro é: <?= $books['title'] ?>
    
    <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
      <div class="flex">
        
        <div class="w-1/3">
          Images
        </div>
        
        <div class='space-y-1'>
          <a href="/books.php?id=<?=$book['id']?>" class="font-semibold hover-underline"><?= $book['title']?></a>
          <div class="text-xs italic"><?=$book['author'] ?></div>
          <div class="text-xs italic">3 (Reviews)</div>
        </div>
      </div>
      
      <div class="text-sm mt-2">
        <?=$book['description']?>
      </div>
    </div>
  
  </main>

</body>
</html>