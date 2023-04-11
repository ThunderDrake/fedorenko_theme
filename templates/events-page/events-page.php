<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <?= ct()->template('/parts/inner-header.php') ?>

  <?= ct()->template('/events-page/parts/events-page__onemore.php') ?>

  <?= ct()->template('/events-page/parts/events-page__why-org.php') ?>

  <?= ct()->template('/events-page/parts/events-page__good-org.php') ?>

  <?= ct()->template('/parts/form.php') ?>

</main>

<?php

ct()->footer();
?>
