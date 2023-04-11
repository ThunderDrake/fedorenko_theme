<?php
/**
* Шаблон Главной страницы
*/

ct()->header();

?>
<?= ct()->template('/parts/inner-header.php') ?>


  <div class="container">
    <video controls width="1575" height="900" class="activity__video">
      <source src="<?= ct()->get_static_url() ?>/test-video.mp4">
    </video>
  </div>

  <?= ct()->template('/activity-page/parts/activity-page__blinding.php') ?>
  <?= ct()->template('/activity-page/parts/activity-page__activity-pcg.php') ?>
  <?= ct()->template('/activity-page/parts/activity-page__activity-pcg.php') ?>
  <?= ct()->template('/activity-page/parts/activity-page__activity-pcg.php') ?>


  <div class="container activity__container">
    <picture class="activity__picture">
      <source srcset="<?= ct()->get_static_url() ?>/img/activity-pic.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/activity-pic.png" class="activity__piciture1" width="1575" height="1043"
        alt="Красивейшая свадьба">
    </picture>
  </div>

  <?= ct()->template('/parts/review.php') ?>
  <?= ct()->template('/activity-page/parts/activity-page__ceremony.php') ?>



</main>

<?php
ct()->footer();
?>
