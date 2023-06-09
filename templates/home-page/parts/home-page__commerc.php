<section class="commerc">
  <div class="commerc__container container">

    <h2 class="commerc__title-text title-text">
      выберите мебель и декор для мероприятия из каталога
    </h2>

    <a href="" class="commerc__btn button btn-reset">
      <span class="button__text">каталог<br> мебели</span>
      <svg class="button__arrow" width="24" height="24">
        <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
      </svg>
    </a>
    <picture class="commerc__picture">
      <source srcset="<?= ct()->get_static_url() ?>/img/commerc-pic.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/commerc-pic.png" class="gallery__picture" width="1568"
        height="952" alt="">
    </picture>
  </div>
</section>
