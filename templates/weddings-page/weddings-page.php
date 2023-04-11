<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
<?= ct()->template('/parts/inner-header.php') ?>

  <div class="container">
    <picture>
      <source srcset="<?= ct()->get_static_url() ?>/img/weddings-pic.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/weddings-pic.png" class="weddings__picture" width="1568" height="800"
        alt="Красивое оформление свадьбы на фоне моря">
    </picture>
  </div>
  <?= ct()->template('/weddings-page/parts/weddings-page__package.php') ?>
  <?= ct()->template('/weddings-page/parts/weddings-page__package.php') ?>

  <?= ct()->template('/weddings-page/parts/weddings-page__package.php') ?>

  <?= ct()->template('/weddings-page/parts/weddings-page__package.php') ?>

  <?= ct()->template('/weddings-page/parts/weddings-page__package.php') ?>

</main>

<?php

ct()->footer();
?>
