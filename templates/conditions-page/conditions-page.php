<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <div class="inner-header">
    <div class="inner-header__container container">
      <h1 class="inner-header__title title-text">условия работы / аренды</h1>
      <div class="breadcrumbs-block">
        <nav class="breadcrumbs-block__nav">
          <ul class="list-reset breadcrumbs-block__list">
            <li class="breadcrumbs-block__list-item">
              <a class="breadcrumbs-block__item" href="/">Главная</a>
            </li>
            <li class="breadcrumbs-block__list-item">
              <span class="breadcrumbs-block__item">условия работы / аренды</span>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </div>

  <section class="breadcrumbs">
    <div class="breadcrumbs__container container">
      <h1 class="breadcrumbs__title title-text">
        готовое решение свадеб
      </h1>
      <nav class="breadcrumbs__nav">
        <a href="index.html" class="breadcrumbs__index small-text">главная</a>
        <div class="breadcrumbs__dash small-text">
           —
        </div>
        <div class="breadcrumbs__wedd small-text">
          Свадьбы
        </div>
      </nav>
    </div>
  </section>

  <section class="conditions-pcg">
    <div class="container conditions-pcg__container">
      <picture>
        <source srcset="img/condition-pic1.webp" type="image/webp">
        <img loading="lazy" src="img/condition-pic1.png" class="conditions-pcg__pic" width="1575" height="400"
          alt="красивые столы">
      </picture>
      <div class="conditions-pcg__flex-title">
        <h2 class="conditions-pcg__title-text title-text">
          аренда мебели
        </h2>
        <a href="" class="team__button button button--no-fill">
          <span class="button__text">каталог мебели</span>
          <svg class="button__arrow" width="24" height="24">
            <use xlink:href="img/sprite.svg#button-arrow"></use>
          </svg>
        </a>
      </div>
      <ul class="accordion__list">
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">

            <span class="accordion__title title-text">
              КАК ЗАКАЗАТЬ?
            </span>

            <span class="accordion__icon">

            </span>

          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ПОЛУЧИТЬ И ВЕРНУТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              В КАКОМ ВИДЕ НУЖНО ВОЗВРАЩАТЬ ИЗДЕЛИЯ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ОПЛАТИТЬ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ЕСТЬ ЛИ ЗАЛОГ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              НА СКОЛЬКО ДНЕЙ МОЖНО ВЗЯТЬ АРЕНДУ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОЖНО ЛИ ОТМЕНИТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              СКОЛЬКО СТОИТ ДОСТАВКА И ЧТО ТАКОЕ СЕТАП?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ВАЖНО О ПОСУДЕ
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОГУТ ЛИ БЫТЬ ДОПОЛНИТЕЛЬНЫЕ РАСХОДЫ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="conditions-pcg">
    <div class="container conditions-pcg__container">
      <picture>
        <source srcset="img/condition-pic1.webp" type="image/webp">
        <img loading="lazy" src="img/condition-pic1.png" class="conditions-pcg__pic" width="1575" height="400"
          alt="красивые столы">
      </picture>
      <div class="conditions-pcg__flex-title">
        <h2 class="conditions-pcg__title-text title-text">
          аренда мебели
        </h2>
        <a href="" class="team__button button button--no-fill">
          <span class="button__text">каталог мебели</span>
          <svg class="button__arrow" width="24" height="24">
            <use xlink:href="img/sprite.svg#button-arrow"></use>
          </svg>
        </a>
      </div>
      <ul class="accordion__list">
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">

            <span class="accordion__title title-text">
              КАК ЗАКАЗАТЬ?
            </span>

            <span class="accordion__icon">

            </span>

          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ПОЛУЧИТЬ И ВЕРНУТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              В КАКОМ ВИДЕ НУЖНО ВОЗВРАЩАТЬ ИЗДЕЛИЯ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ОПЛАТИТЬ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ЕСТЬ ЛИ ЗАЛОГ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              НА СКОЛЬКО ДНЕЙ МОЖНО ВЗЯТЬ АРЕНДУ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОЖНО ЛИ ОТМЕНИТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              СКОЛЬКО СТОИТ ДОСТАВКА И ЧТО ТАКОЕ СЕТАП?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ВАЖНО О ПОСУДЕ
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОГУТ ЛИ БЫТЬ ДОПОЛНИТЕЛЬНЫЕ РАСХОДЫ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="conditions-pcg">
    <div class="container conditions-pcg__container">
      <picture>
        <source srcset="img/condition-pic1.webp" type="image/webp">
        <img loading="lazy" src="img/condition-pic1.png" class="conditions-pcg__pic" width="1575" height="400"
          alt="красивые столы">
      </picture>
      <div class="conditions-pcg__flex-title">
        <h2 class="conditions-pcg__title-text title-text">
          аренда мебели
        </h2>
        <a href="" class="team__button button button--no-fill">
          <span class="button__text">каталог мебели</span>
          <svg class="button__arrow" width="24" height="24">
            <use xlink:href="img/sprite.svg#button-arrow"></use>
          </svg>
        </a>
      </div>
      <ul class="accordion__list">
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">

            <span class="accordion__title title-text">
              КАК ЗАКАЗАТЬ?
            </span>

            <span class="accordion__icon">

            </span>

          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ПОЛУЧИТЬ И ВЕРНУТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              В КАКОМ ВИДЕ НУЖНО ВОЗВРАЩАТЬ ИЗДЕЛИЯ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ОПЛАТИТЬ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ЕСТЬ ЛИ ЗАЛОГ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              НА СКОЛЬКО ДНЕЙ МОЖНО ВЗЯТЬ АРЕНДУ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОЖНО ЛИ ОТМЕНИТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              СКОЛЬКО СТОИТ ДОСТАВКА И ЧТО ТАКОЕ СЕТАП?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ВАЖНО О ПОСУДЕ
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОГУТ ЛИ БЫТЬ ДОПОЛНИТЕЛЬНЫЕ РАСХОДЫ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>

      </ul>

    </div>
  </section>

  <section class="conditions-pcg">
    <div class="container conditions-pcg__container">
      <picture>
        <source srcset="img/condition-pic1.webp" type="image/webp">
        <img loading="lazy" src="img/condition-pic1.png" class="conditions-pcg__pic" width="1575" height="400"
          alt="красивые столы">
      </picture>
      <div class="conditions-pcg__flex-title">
        <h2 class="conditions-pcg__title-text title-text">
          аренда мебели
        </h2>
        <a href="" class="team__button button button--no-fill">
          <span class="button__text">каталог мебели</span>
          <svg class="button__arrow" width="24" height="24">
            <use xlink:href="img/sprite.svg#button-arrow"></use>
          </svg>
        </a>
      </div>
      <ul class="accordion__list">
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">

            <span class="accordion__title title-text">
              КАК ЗАКАЗАТЬ?
            </span>

            <span class="accordion__icon">

            </span>

          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ПОЛУЧИТЬ И ВЕРНУТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              В КАКОМ ВИДЕ НУЖНО ВОЗВРАЩАТЬ ИЗДЕЛИЯ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              КАК ОПЛАТИТЬ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ЕСТЬ ЛИ ЗАЛОГ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              НА СКОЛЬКО ДНЕЙ МОЖНО ВЗЯТЬ АРЕНДУ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОЖНО ЛИ ОТМЕНИТЬ ЗАКАЗ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              СКОЛЬКО СТОИТ ДОСТАВКА И ЧТО ТАКОЕ СЕТАП?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              ВАЖНО О ПОСУДЕ
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>
        <li class="accordion">
          <button class="accordion__control" aria-expanded="false">
            <span class="accordion__title title-text">
              МОГУТ ЛИ БЫТЬ ДОПОЛНИТЕЛЬНЫЕ РАСХОДЫ?
            </span>
            <span class="accordion__icon">

            </span>
          </button>
          <div class="accordion__content" aria-hidden="true">
            <span class="accordion__text small-text">
              Сделать заказ просто: выберите изделия в каталоге на сайте
              и добавьте их в корзину, укажите даты получения и возврата
              заказа, если необходимо — добавьте доставку и сетап. Все готово,
              теперь вы можете разместить заказ.
            </span>
            <span class="accordion__text small-text">
              Заказы вы можете создавать круглосуточно, но заказы, которые
              требуют подтверждения обрабатываются менеджерами в рабочее время
              с 10:00 до 19:00.
            </span>

          </div>
        </li>

      </ul>

    </div>
  </section>

</main>
<?php

ct()->footer();
