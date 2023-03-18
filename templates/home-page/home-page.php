<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <section class="hero">
    <div class="container hero__container">
      <div class="hero__flex-container">
        <h1 class="visually-hidden">Fedorenko Decor — организация мероприятий, свадеб и торжест под ключ в городе Сочи
          и Сочинском районе</h1>
        <div class="hero__title title-text">
          Создаём уникальную атмосферу для самых значимых событий
        </div>
        <div class="hero__small-text small-text">
          полное погружение в другую реальность.
          Мы воплощаем в жизнь любые решения, делая мероприятие самым запоминаемым событием города.
        </div>
      </div>
      <div class="hero__picture-block">
        <div class="hero__picture-button">
          <a href="#" class="hero__button button btn-reset">
            <span class="button__text">каталог<br>мебели</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </a>
          <picture>
            <source srcset="<?= ct()->get_static_url() ?>/img/hero.webp" type="image/webp">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/hero.png" class="hero__picture" width="1570" height="865"
              alt="Красивый стол с розами">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section class="direction">
    <div class="container direction__container">
      <h2 class="direction__title title-text">Направления:</h2>

      <ul class="direction__list list-reset">
        <li class="direction__list-item">

          <a class="direction__item" href="#">
            <h3 class="direction__item-title title-text">Аренда мебели
              <svg class="direction__item-icon" width="24" height="24">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
              </svg>
            </h3>
            <picture>
              <source srcset="<?= ct()->get_static_url() ?>/img/direction__item-image-1.webp" type="image/webp">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/direction__item-image-1.jpg" class="direction__item-image" width="1040"
                height="248" alt="">
            </picture>
          </a>

        </li>

        <li class="direction__list-item">

          <a class="direction__item" href="weddings.html">
            <h3 class="direction__item-title title-text">Свадьбы
              <svg class="direction__item-icon" width="24" height="24">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
              </svg>
            </h3>
            <picture>
              <source srcset="<?= ct()->get_static_url() ?>/img/direction__item-image-2.webp" type="image/webp">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/direction__item-image-2.jpg" class="direction__item-image" width="1040"
                height="248" alt="">
            </picture>
          </a>

        </li>

        <li class="direction__list-item">

          <a class="direction__item" href="#">
            <h3 class="direction__item-title title-text">Ивенты
              <svg class="direction__item-icon" width="24" height="24">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
              </svg>
            </h3>
            <picture>
              <source srcset="<?= ct()->get_static_url() ?>/img/direction__item-image-3.webp" type="image/webp">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/direction__item-image-3.jpg" class="direction__item-image" width="1040"
                height="248" alt="">
            </picture>
          </a>

        </li>

        <li class="direction__list-item">

          <a class="direction__item" href="#">
            <h3 class="direction__item-title title-text">Организация мероприятий под ключ
              <svg class="direction__item-icon" width="24" height="24">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
              </svg>
            </h3>
            <picture>
              <source srcset="<?= ct()->get_static_url() ?>/img/direction__item-image-4.webp" type="image/webp">
              <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/direction__item-image-4.jpg" class="direction__item-image" width="1040"
                height="248" alt="">
            </picture>
          </a>

        </li>

      </ul>

    </div>

  </section>

  <section class="team">
    <div class="container team__container">

      <div class="team__flex-title">
        <h2 class="team__title title-text">
          Команда Fedorenko Decor — <br>
          это топовые профессионалы города
        </h2>
      </div>

      <div class="team__content">
        <div class="team__picture-block">
          <picture>
            <source srcset="<?= ct()->get_static_url() ?>/img/team.webp" type="image/webp">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/team.png" class="team__picture" width="512" height="996"
              alt="Екатерина Федоренко сидит на фоне красивых белых цветов">
          </picture>
          <svg class="team__sign">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#sign"></use>
          </svg>
        </div>
        <div class="team__story">
          <div class="team__year-block">
            <div class="team__year title-text">
              2010
            </div>
            <div class="team__year title-text">
              2012
            </div>
            <div class="team__year title-text">
              2013
            </div>
            <div class="team__year_down title-text">
              2021
            </div>
          </div>
          <div class="team__text-block">
            <div class="team__text_visible small-text">
              Меня зовут Федоренко Екатерина. Первое образование
              дизайн среды, туда входит дизайн интерьера,
              архитектура, графическией дизайн). Второе образовани
              экономика и управление на предприятии.
              Десятки курсов по флористики и декору от лучших
              школ России.

            </div>
            <div class="team__text small-text">
              работала координатором мероприятий.

            </div>
            <div class="team__text small-text">
              начало работы организатором мероприятий.

            </div>
            <div class="team__text small-text">
              создала свою фирму по Ивент дизайну.
              Дизайну событий. На протяжении всех
              этих лет совершенствовалась в своём
              бизнесе постоянно повышая квалификацию.

            </div>
            <div class="team__text small-text">
              появился свой склад мебели. Уровень и опыт
              позволяет делать мероприятия любого уровня
              и сложности. Опыт организатора даёт возможность
              справляться с любыми задачами и не теряться в
              самых сложных ситуациях.
            </div>
            <a href="" class="team__button button button--no-fill">
              <span class="button__text">подробнее</span>
              <svg class="button__arrow" width="24" height="24">
                <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

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

  <section class="gallery">
    <div class="gallery__container container">
      <h2 class="gallery__title-text title-text">
        стиль мероприятия, о котором говорит весь город
      </h2>
      <div class="gallery__picture-block">
        <picture class="gallery__picture1">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic1.png" class="gallery__picture" width="512" height="1040" alt="">
        </picture>

        <picture class="gallery__picture2">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic2.png" class="gallery__picture" width="512" height="424" alt="">
        </picture>

        <picture class="gallery__picture3">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic3.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic3.png" class="gallery__picture" width="512" height="1040" alt="">
        </picture>

        <picture class="gallery__picture4">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic4.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic4.png" class="gallery__picture" width="512" height="776" alt="">
        </picture>

        <picture class="gallery__picture5">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic5.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic5.png" class="gallery__picture" width="512" height="512" alt="">
        </picture>

        <picture class="gallery__picture6">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic6.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic6.png" class="gallery__picture" width="512" height="336" alt="">
        </picture>

        <picture class="gallery__picture6--cut">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic6.1.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic6.1.png" class="gallery__picture" width="336" height="472" alt="">
        </picture>

        <picture class="gallery__picture7">
          <source srcset="<?= ct()->get_static_url() ?>/img/gallery-pic7.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/gallery-pic7.png" class="gallery__picture" width="512" height="336" alt="">
        </picture>
      </div>
    </div>
  </section>

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
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/commerc-pic.png" class="gallery__picture" width="1568" height="952" alt="">
      </picture>
    </div>
  </section>

  <section class="form-section">
    <div class="form-section__container container">
      <div class="form-section__header">
        <h2 class="form-section__title title-text">Если вы затрудняетесь подобрать стиль самостоятельно, оставьте заявку
        </h2>
        <div class="form-section__subtitle">Мы свяжемся с вами в ближайшее время</div>
      </div>
      <form action="#" class="form-section__form form">
        <label class="form__label">
          <input type="text" name="name" class="input-reset form__input form__input--name" placeholder="Имя">
          <span class="form__input-label">Имя</span>
        </label>
        <label class="form__label">
          <input type="tel" name="phone" class="input-reset form__input form__input--phone"
            placeholder="+7 (---) --- -- --">
          <span class="form__input-label">Телефон</span>
        </label>
        <label class="form__label">
          <input type="text" name="type" class="input-reset form__input form__input--type" placeholder="Свадьба">
          <span class="form__input-label">Какое мероприятие?</span>
        </label>
        <label class="form__label">
          <input type="number" name="count" class="input-reset form__input form__input--count"
            placeholder="50-60 человек">
          <span class="form__input-label">Количество гостей</span>
        </label>
        <label class="form__label form__label--wide">
          <input type="text" name="Имя" class="input-reset form__input form__input--name"
            placeholder="Здесь вы можете указать особые примечания и пожелания">
          <span class="form__input-label">О чём ещё мы должны знать?</span>
        </label>
        <div class="form__footer">
          <label class="custom-checkbox form__checkbox">
            <input type="checkbox" class="custom-checkbox__field form--privacy">
            <span class="custom-checkbox__content">НАЖИМАЯ ГАЛОЧКУ «СОГЛАСЕН» ВЫ ПОДТВЕРЖДАЕТЕ СВОЕ СОГЛАСИЕ
              НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
          </label>
          <button class="button btn-reset form__btn">
            <span class="button__text">Отправить заявку</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </section>

</main>

<?php

ct()->footer();
