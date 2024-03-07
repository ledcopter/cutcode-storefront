<?php 
require_once __DIR__ . "/vendor/autoload.php";

use Storefront\Models\Products;

$products = Products::getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header class="main-header">
    <h1 class="main-header__title">Магазин книг</h1>
  </header>

  <main>
    <section class="products">
      <div class="container products__container">

      <?php foreach ($products as $product): ?>
        <div class="product-card">
          <img class="product-card__image" src="<?=$product['image']?>">
          <p class="product-card__title"><?=$product['name']?></p>
          <p class="product-card__price"><?=$product['price']?> руб.</p>
          <button type="button" class="btn product-card__btn" data-product-id="<?=$product['id']?>">Купить</button>
        </div>
      <?php endforeach; ?>

      </div>
    </section>
  </main>

  <footer class="main-footer">
    <p class="main-footer__text">Все права защищены</p>
  </footer>

  <script src="/js/script.js"></script>
</body>
</html>