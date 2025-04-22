<?php
  $books = [
    ['id' => 1, 'title' => 'The Lord of the Rings', 'author' => 'J.R.R Tolkien', 'description' => 'Set in Middle-earth, the story began as a sequel to book The Hobbit but eventually developed into a much larger work.'],

    ['id' => 2, 'title' => 'Neuromancer', 'author' => 'William Gibson', 'description' => 'Case, a computer hacker enlisted into a crew by a powerful artificial intelligence and a traumatised former soldier to complete a high-stakes heist.'],

    ['id' => 3, 'title' => "The Hitchhiker's Guide to the Galaxy", 'author' => 'Douglas Adams', 'description' => "The Hitchhiker's Guide to the Galaxy is a sci-fi comedy by Douglas Adams that follows Arthur Dent's bizarre adventures through space after Earth is destroyed."],
    
    ['id' => 4, 'title' => 'The Short Legs of Lies', 'author' => 'Moacyr Scliar', 'description' => "The human imagination can be used to create new and fascinating ways of feeling and acting, as well as to invent lies, from the most innocent to the most dangerous slander."],

    ['id' => 5, 'title' => 'The Bookseller of Kabul', 'author' => 'Åsne Seierstad', 'description' => 'An intimate portrait of a man, his principles and his family, two wives, five children and many relatives sharing a small four-room apartment.'],

    ['id' => 6, 'title' => 'Les Misérables', 'author' => 'Victor Hugo', 'description' => 'Les Misérables is a French epic historical novel by Victor Hugo, first published on 31 March 1862, that is considered one of the greatest novels of the 19th century.'],

    ['id' => 7, 'title' => 'Dom Casmurro', 'author' => 'Joaquim Maria Machado de Assis', 'description' => 'Dom Casmurro is an 1899 novel written by Brazilian author Joaquim Maria Machado de Assis.'],

    ['id' => 8, 'title' => 'Lolita', 'author' => 'Vladimir Nabokov', 'description' => 'The protagonist is a French literature professor who moves to New England and writes under the pseudonym Humbert Humbert.'],
    
    ['id' => 9, 'title' => 'The Little Prince', 'author' => 'Antoine de Saint-Exupéry', 'description' => "It's a poetic and philosophical story that tells of the encounter between a pilot lost in the desert and a young prince from a small asteroid."]
  ]
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

  <main class="mx-auto max-w-screen-lg space-y-5">
    <form class="w-full flex space-x-2 mt-6">
      <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-small w-full" placeholder="Enter the name of the book">

      <button type="submit">Search</button>
    </form>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 flex gap-4">
      <!-- Books -->
      <?php foreach($books as $book): ?>

      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="w-1/3">Images</div>
          <div>
            <a href="/books.php?id=<?=$book['id']?>" class=""font-semibold hover-underline><?=$book['title']?></a>
            <div class="text-xs italic"><?=$book['author']?></div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div class="text-sm">
          <?=$book['description']?>
          </div>
      </div>
      <?php endforeach; ?>
    </section>
  </main>

</body>
</html>