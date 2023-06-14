<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
<?= ct()->template('/home-page/parts/home-page__hero.php') ?>
<?= ct()->template('/parts/direction.php') ?>
<?= ct()->template('/parts/team.php') ?>

<?= ct()->template('/parts/review.php') ?>
<?= ct()->template('/parts/gallery.php') ?>
<?= ct()->template('/home-page/parts/home-page__commerc.php') ?>

<?= ct()->template('/parts/form.php') ?>

<?php

ct()->footer();
?>
