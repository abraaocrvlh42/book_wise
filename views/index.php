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