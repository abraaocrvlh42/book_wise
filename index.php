<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Wise</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-100">
  <header class="bg-stone-800">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
      <div class="font-bold text-xl tracking-wide">Book Wise</div>
      <ul class="flex space-x-5 font-bold">
        <li><a href="/" class="text-purple-400">Explore</a></li>
        <li><a href="/MyBooks.php" class="hover:underline">My Books</a></li>
      </ul>

      <ul>
        <li><a href="/Login.php" class="hover:underline">Login</a></li>
      </ul>
    </nav>
  </header>

  <main class="mx-auto max-w-screen-lg space-y-5">
    <form class="mt-6 w-full flex space-x-2">
      
      <input type="text" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full" placeholder="Search...">

      <button type="submit">Search</button>
    </form>

    <section class="space-y-4">
      
    </section>
  </main>
</body>
</html>