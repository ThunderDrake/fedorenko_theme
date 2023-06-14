<?php
/**
* Шаблон Главной страницы
*/
$faq = get_field('faq', 'option');
ct()->header();
?>

<main class="main">
<?= ct()->template('/parts/inner-header.php') ?>
<?php
if( have_rows('faq', 'option') ) {
  while( have_rows('faq', 'option')) { the_row();
    ct()->template('/conditions-page/parts/conditions-page__conditions-pcg.php');
  }
}
?>
<?= ct()->template('/parts/form.php') ?>
</main>

<?php
ct()->footer();
?>
