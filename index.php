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
      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="">Images</div>
          <div>
            <a href="/books.php?" class=""font-semibold hover-underline>Title</a>
            <div class="text-xs italic">Author</div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div>Description</div>
      </div>

      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="">Images</div>
          <div>
            <a href="/books.php?" class=""font-semibold hover-underline>Title</a>
            <div class="text-xs italic">Author</div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div>Description</div>
      </div>

      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="">Images</div>
          <div>
            <a href="/books.php?" class=""font-semibold hover-underline>Title</a>
            <div class="text-xs italic">Author</div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div>Description</div>
      </div>

      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="">Images</div>
          <div>
            <a href="/books.php?" class=""font-semibold hover-underline>Title</a>
            <div class="text-xs italic">Author</div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div>Description</div>
      </div>

      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="">Images</div>
          <div>
            <a href="/books.php?" class=""font-semibold hover-underline>Title</a>
            <div class="text-xs italic">Author</div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div>Description</div>
      </div>

      <div class=" p-2 border-2 rounded border-stone-800 bg-stone-900">
        <div class="flex">
          <div class="">Images</div>
          <div>
            <a href="/books.php?" class=""font-semibold hover-underline>Title</a>
            <div class="text-xs italic">Author</div>
            <div class="text-xs italic">3 (Reviews)</div>
          </div>
        </div>
          <div>Description</div>
      </div>
    </section>
  </main>

</body>
</html>