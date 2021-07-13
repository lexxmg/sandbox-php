<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/php/products.php');
require ($_SERVER['DOCUMENT_ROOT'] . '/php/order.php');

$id = $_REQUEST['id'] ?? 1;
$success = false;
$error= false;
//$product = [];

for ($i = 0; $i < count($products); $i++) {
    if ($products[$i]['id'] == $id) {
        $product = $products[$i];
    }
}

if ( !empty($_POST) ) {
    if ( empty($_POST['name']) || empty($_POST['id']) ) {
        $error = true;
    } else {
        if ( makeOrder($product, $_POST['name']) ) {
            $success = true;
        } else {
            $error = true;
        }
    }
}

require ($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>

<div class="container">
  <h1>Покупка</h1>

  <?php if ($success): ?>
      <p class="success">
        Ваша покупка оформлена
      </p>
  <?php else: ?>

      <?php if ($error): ?>
          <p class="error">
            Нужно выбрать товар и заполнить ваше фио
          </p>
      <?php endif; ?>

      <div class="items">
        <figure>
          <p><img src=<?=$product['img']?> alt=<?=$product['name']?> /></p>
          <figcaption><?=$product['name']?></figcaption>
        </figure>
      </div>

      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="id" value="<?=htmlspecialchars($product['id'])?>">

        <label>
          Ваше ФИО*:
          <input
            type="text"
            name="name"
            placeholder="Введите ваше фио"
            value="<?=$_POST['name'] ?? ''?>"
          >
        </label>
        <input type="submit" class="btn" value="Купить">
      </form>

  <?php endif; ?>
</div>

<?php require ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php') ?>
