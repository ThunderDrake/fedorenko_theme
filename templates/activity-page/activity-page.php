<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
ct()->innerheader();
?>

  <div class="container">
    <video controls width="1575" height="900" class="activity__video">
      <source src="<?= ct()->get_static_url() ?>/test-video.mp4">
    </video>
  </div>

  <?php ct()->blinding(); ?>

  <!-- много activity pcg -->\


  <div class="container activity__container">
    <picture class="activity__picture">
      <source srcset="<?= ct()->get_static_url() ?>/img/activity-pic.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/activity-pic.png" class="activity__piciture1" width="1575" height="1043"
        alt="Красивейшая свадьба">
    </picture>
  </div>
  <?php
  ct()->review();
  ct()->ceremony(); ?>


</main>

<?php
ct()->footer();
?>
