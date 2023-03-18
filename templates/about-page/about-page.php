<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <div class="inner-header">
    <div class="inner-header__container container">
      <h1 class="inner-header__title title-text">О нас</h1>
      <div class="breadcrumbs-block">
        <nav class="breadcrumbs-block__nav">
          <ul class="list-reset breadcrumbs-block__list">
            <li class="breadcrumbs-block__list-item">
              <a class="breadcrumbs-block__item" href="/">Главная</a>
            </li>
            <li class="breadcrumbs-block__list-item">
              <span class="breadcrumbs-block__item">О нас</span>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </div>

  <section class="team">
    <div class="container team__container">

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

  <section class="about-me">
    <div class="about-me__container container">
      <h2 class="about-me__title title-text">Нам доверяют,<br>
        а мы в свою очередь делаем работу так, что бы превзойти Ваши самые смелые ожидания.</h2>
      <div class="about-me__content">
        <div class="about-me__col about-me__col--first">
          <p>Так же за годы работы у нас сформировалась классная команда специалистов. Обзавелись большой
            производственной базой.</p>
        </div>
        <div class="about-me__col about-me__col--second">
          <ul class="list-reset">
            <li>
               — Широкоформатная печать
            </li>
            <li>
               — Фрезер
            </li>
            <li>
               — Лазер
            </li>
            <li>
               — Лакокрасочный цех
            </li>
            <li>
               — Сварочный цех
            </li>
            <li>
               — Столярная мастерская
            </li>
          </ul>
        </div>
        <div class="about-me__exp">
          <div class="about-me__exp-number title-text">+15</div>
          <div class="about-me__exp-text">специалистов в команде</div>
        </div>
        <div class="about-me__big-image">
          <picture>
            <source srcset="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-1.webp" type="image/webp">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-1.jpg" width="952" height="776"
              alt="Три девушки стоят в листве">
          </picture>
        </div>
        <div class="about-me__small-image">
          <picture>
            <source srcset="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-2.webp" type="image/webp">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-2.jpg" width="600" height="776"
              alt="Екатерина смотрит наверх на фоне листвы">
          </picture>
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
