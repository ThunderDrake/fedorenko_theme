<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <?= ct()->template('/parts/inner-header.php') ?>

  <?= ct()->template('/about-page/parts/about-page__team.php') ?>

  <?= ct()->template('/about-page/parts/about-page__about-me.php') ?>

  <?= ct()->template('/parts/review.php') ?>

  <?= ct()->template('/parts/direction.php') ?>

  <?= ct()->template('/parts/form.php') ?>

</main>

<?php

ct()->footer();
?>
