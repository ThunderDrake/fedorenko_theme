<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
<?= ct()->template('/parts/inner-header.php') ?>

<?= ct()->template('/conditions-page/parts/conditions-page__conditions-pcg.php') ?>

<?= ct()->template('/conditions-page/parts/conditions-page__conditions-pcg.php') ?>

<?= ct()->template('/conditions-page/parts/conditions-page__conditions-pcg.php') ?>

<?= ct()->template('/conditions-page/parts/conditions-page__conditions-pcg.php') ?>

</main>
<?php

ct()->footer();
?>
