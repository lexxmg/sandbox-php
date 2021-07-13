<?php
  require ('php/sandbox.php');
  require ($_SERVER['DOCUMENT_ROOT'] . '/php/products.php');
  require ($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>

<div class="container">
  <h1>Каталог</h1>

  <div class="items">

    <?php foreach ($products as $key => $product): ?>
        <figure>
            <p><img src=<?=$product['img']?> alt=<?=$product['name']?> /></p>
            <figcaption><?=$product['name']?></figcaption>
            <a href="/form.php?id=<?=$product['id']?>" class="btn">Купить</a>
        </figure>
    <?php endforeach; ?>

  </div>
</div>

<?php require ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php')?>
