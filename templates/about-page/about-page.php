<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <?php ct()->innerheader(); ?>
  <?php ct()->team(); ?>
  <?php ct()->aboutme(); ?>
  <?php ct()->review(); ?>
  <?php ct()->direction(); ?>
  <?php ct()->form(); ?>
</main>

<?php ct()->footer(); ?>
