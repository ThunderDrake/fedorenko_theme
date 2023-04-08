<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <div class="inner-header">
    <div class="inner-header__container container">
      <h1 class="inner-header__title title-text">Ивенты</h1>
      <div class="breadcrumbs-block">
        <nav class="breadcrumbs-block__nav">
          <ul class="list-reset breadcrumbs-block__list">
            <li class="breadcrumbs-block__list-item">
              <a class="breadcrumbs-block__item" href="/">Главная</a>
            </li>
            <li class="breadcrumbs-block__list-item">
              <span class="breadcrumbs-block__item">Ивенты</span>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </div>

  <div class="container">
    <video controls width="1575" height="900" class="activity__video">
      <source src="<?= ct()->get_static_url() ?>/test-video.mp4">
    </video>
  </div>
  <section class="blinding">
    <div class="container blinding__container">
      <h2 class="blinding__title-text title-text">
        Самые яркие ивенты
      </h2>
      <div class="blinding__img-block">
        <picture class="blinding__pic1">
          <source srcset="<?= ct()->get_static_url() ?>/img/blinding-pic1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/blinding-pic1.png" class="blinding__pic" width="512" height="512" alt="клуб 500">
        </picture>
        <picture class="blinding__pic2">
          <source srcset="<?= ct()->get_static_url() ?>/img/blinding-pic2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/blinding-pic2.png" class="blinding__pic" width="512" height="524" alt="клуб 500">
        </picture>
        <picture class="blinding__pic3">
          <source srcset="<?= ct()->get_static_url() ?>/img/blinding-pic3.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/blinding-pic3.png" class="blinding__pic" width="512" height="336" alt="клуб 500">
        </picture>
        <picture class="blinding__pic4">
          <source srcset="<?= ct()->get_static_url() ?>/img/blinding-pic4.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/blinding-pic4.png" class="blinding__pic" width="512" height="424" alt="клуб 500">
        </picture>
        <picture class="blinding__pic5">
          <source srcset="<?= ct()->get_static_url() ?>/img/blinding-pic5.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/blinding-pic5.png" class="blinding__pic" width="512" height="864" alt="клуб 500">
        </picture>
      </div>

    </div>
  </section>

  <section class="clab">
    <div class="container">
      <h2 class="clab__title-text title-text">
        clab 500
      </h2>

      <picture class="clab__pic1">
        <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic1.webp" type="image/webp">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic1.png" class="clab__pic" width="1575" height="1040" alt="клуб 500">
      </picture>
      <picture class="clab__pic2">
        <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic2.webp" type="image/webp">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic2.png" class="clab__pic" width="1575" height="1040" alt="клуб 500">
      </picture>
    </div>
  </section>

  <section class="activity-pcg">
    <div class="container activity-pcg__container">
      <div class="activity-pcg__information">
        <div class="activity-pcg__text-block">
          <h2 class="activity-pcg__title-text title-text">
            standard
          </h2>
          <p class="activity-pcg__text small-text">
            очень короткое описание.
            Барная стойка — прилавок для продажи напитков в барах,
            кафе и ресторанах, отделяющих бармена от посетителя.
          </p>
        </div>
        <div class="activity-pcg__buy">
          <div class="activity-pcg__buy-text-block">
            <h3 class="activity-pcg__buy-title title-text">
              закажите
              в один клик
            </h3>
            <p class="activity-pcg__text small-text activity-pcg__text--unvisible">
              от 500.000 р
            </p>
          </div>
          <a href="" class="activity-pcg__btn button btn-reset">
            <span class="button__text">в корзину</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </a>
        </div>
      </div>
      <div class="activity-pcg__img-block">
        <picture class="activity-pcg__pic1">
          <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic1.png" class="activity-pcg__pic" width="776" height="320" alt="клуб 500">
        </picture>
        <picture class="activity-pcg__pic2">
          <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic2.png" class="activity-pcg__pic" width="776" height="320" alt="клуб 500">
        </picture>
      </div>
    </div>
  </section>

  <section class="activity-pcg">
    <div class="container activity-pcg__container">
      <div class="activity-pcg__information">
        <div class="activity-pcg__text-block">
          <h2 class="activity-pcg__title-text title-text">
            standard
          </h2>
          <p class="activity-pcg__text small-text">
            очень короткое описание.
            Барная стойка — прилавок для продажи напитков в барах,
            кафе и ресторанах, отделяющих бармена от посетителя.
          </p>
        </div>
        <div class="activity-pcg__buy">
          <div class="activity-pcg__buy-text-block">
            <h3 class="activity-pcg__buy-title title-text">
              закажите
              в один клик
            </h3>
            <p class="activity-pcg__text small-text activity-pcg__text--unvisible">
              от 500.000 р
            </p>
          </div>
          <a href="" class="activity-pcg__btn button btn-reset">
            <span class="button__text">в корзину</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </a>
        </div>
      </div>
      <div class="activity-pcg__img-block">
        <picture class="activity-pcg__pic1">
          <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic1.png" class="activity-pcg__pic" width="776" height="320" alt="клуб 500">
        </picture>
        <picture class="activity-pcg__pic2">
          <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic2.png" class="activity-pcg__pic" width="776" height="320" alt="клуб 500">
        </picture>
      </div>
    </div>
  </section>

  <section class="activity-pcg">
    <div class="container activity-pcg__container">
      <div class="activity-pcg__information">
        <div class="activity-pcg__text-block">
          <h2 class="activity-pcg__title-text title-text">
            standard
          </h2>
          <p class="activity-pcg__text small-text">
            очень короткое описание.
            Барная стойка — прилавок для продажи напитков в барах,
            кафе и ресторанах, отделяющих бармена от посетителя.
          </p>
        </div>
        <div class="activity-pcg__buy">
          <div class="activity-pcg__buy-text-block">
            <h3 class="activity-pcg__buy-title title-text">
              закажите
              в один клик
            </h3>
            <p class="activity-pcg__text small-text activity-pcg__text--unvisible">
              от 500.000 р
            </p>
          </div>
          <a href="" class="activity-pcg__btn button btn-reset">
            <span class="button__text">в корзину</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </a>
        </div>
      </div>
      <div class="activity-pcg__img-block">
        <picture class="activity-pcg__pic1">
          <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic1.png" class="activity-pcg__pic" width="776" height="320" alt="клуб 500">
        </picture>
        <picture class="activity-pcg__pic2">
          <source srcset="<?= ct()->get_static_url() ?>/img/clab-pic2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/clab-pic2.png" class="activity-pcg__pic" width="776" height="320" alt="клуб 500">
        </picture>
      </div>
    </div>
  </section>

  <div class="container activity__container">
    <picture class="activity__picture">
      <source srcset="<?= ct()->get_static_url() ?>/img/activity-pic.webp" type="image/webp">
      <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/activity-pic.png" class="activity__piciture1" width="1575" height="1043"
        alt="Красивейшая свадьба">
    </picture>
  </div>
  <section class="review">
    <div class="review__container container">
      <h2 class="review__title title-text">Что говорят клиенты</h2>
    </div>
    <div class="review__slider-outer">
      <div class="swiper review__slider">
        <div class="swiper-wrapper review__slider-wrapper">
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.Есть над чем задуматься: стремящиеся вытеснить традиционное производство, нанотехнологии
                представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть азумом
                и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.Есть над чем задуматься: стремящиеся вытеснить традиционное производство, нанотехнологии
                представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть азумом
                и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом и должны.Есть
                над чем задуматься: стремящиеся вытеснить традиционное производство, нанотехнологии представляют собой
                не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть азумом и должны быть азумом
                и должны. сенцию победы маркетинга над разумом и должны быть азумом и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">» Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.</p>
            </div>
          </div>
          <div class="swiper-slide review__slider-slide">
            <div class="review__item">
              <div class="review__item-image-wrapper">
                <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                  alt="Логтип компании">
              </div>
              <div class="review__item-names">Татьяна и Анатолий Казловы</div>
              <h3 class="review__item-company">«Рога и копыта» / Свадьба</h3>
              <p class="review__item-descr">«Есть над чем задуматься: стремящиеся вытеснить традиционное производство,
                нанотехнологии представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны
                быть азумом и должны быть азумом и должны. сенцию победы маркетинга над разумом и должны быть азумом
                и должны.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="review__controls">
      <div class="swiper-button-prev review__nav-button">
        <svg class="review__nav-button-icon" width="13" height="8">
          <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#arrow-swiper-prev"></use>
        </svg>
      </div>
      <div class="swiper-pagination review__pagination"></div>
      <div class="swiper-button-next review__nav-button">
        <svg class="review__nav-button-icon" width="13" height="8">
          <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#arrow-swiper-next"></use>
        </svg>
      </div>
    </div>
  </section>

  <section class="ceremony">
    <div class="container ceremony__container">
      <div class="ceremony__flex">
        <picture class="ceremony__piciture1">
          <source srcset="<?= ct()->get_static_url() ?>/img/ceremony1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/ceremony1.png" class="ceremony__piciture" width="952" height="512"
            alt="Красивейшая свадьба">
        </picture>
        <picture class="ceremony__piciture2">
          <source srcset="<?= ct()->get_static_url() ?>/img/ceremony2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/ceremony2.png" class="ceremony__piciture" width="952" height="424"
            alt="Красивейшая свадьба">
        </picture>
      </div>
      <picture class="ceremony__piciture3">
        <source srcset="<?= ct()->get_static_url() ?>/img/ceremony3.webp" type="image/webp">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/ceremony3.png" class="ceremony__piciture" width="600" height="952"
          alt="Красивейшая свадьба">
      </picture>
    </div>
  </section>

</main>

<?php

ct()->footer();
