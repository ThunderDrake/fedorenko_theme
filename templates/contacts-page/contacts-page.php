<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main"></main>
  <?= ct()->template('/parts/inner-header.php') ?>

  <?= ct()->template('/contacts-page/parts/contacts-page__contacts-section.php') ?>

  <?= ct()->template('/parts/form.php') ?>

</main>

<?php

ct()->footer();
?>
