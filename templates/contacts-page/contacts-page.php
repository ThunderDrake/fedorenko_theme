<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <div class="inner-header">
    <div class="inner-header__container container">
      <h1 class="inner-header__title title-text">Контакты</h1>
      <div class="breadcrumbs-block">
        <nav class="breadcrumbs-block__nav">
          <ul class="list-reset breadcrumbs-block__list">
            <li class="breadcrumbs-block__list-item">
              <a class="breadcrumbs-block__item" href="/">Главная</a>
            </li>
            <li class="breadcrumbs-block__list-item">
              <span class="breadcrumbs-block__item">Контакты</span>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </div>

  <section class="contacts-section">
    <div class="contacts-section__container container">
      <div class="contacts-section__image-wrapper">
        <picture>
          <source srcset="img/contacts-section__image.webp" type="image/webp">
          <img loading="lazy" src="img/contacts-section__image.jpg" class="contacts-section__image" width="952"
            height="688" alt="Президиум на стеклянном полу">
        </picture>
      </div>
      <div class="contacts-section__content">
        <h2 class="contacts-section__title title-text">У ВАС ОСТАЛИСЬ ВОПРОСЫ? ПОЗВОНИТЕ ИЛИ НАПИШИТЕ НАМ!</h2>
        <div class="contacts-section__descr">мы обязательно поможем, если у вас остались какие-то вопросы или сложность
          с выбором.</div>
        <div class="contacts-section__links">
          <div class="contacts-section__button-wrapper">
            <a href="#"
              class="contacts-section__button contacts-section__button--telegram button button--no-fill btn-reset">
              <span class="button__text"><strong>Открыть</strong> Telegram</span>
              <svg class="button__arrow" width="24" height="24">
                <use xlink:href="img/sprite.svg#button-arrow"></use>
              </svg>
            </a>
            <svg class="contacts-section__button-icon" width="28" height="28">
              <use xlink:href="img/sprite.svg#tg-icon"></use>
            </svg>
          </div>
          <div class="contacts-section__button-wrapper">
            <a href="#"
              class="contacts-section__button contacts-section__button--whatsapp button button--no-fill btn-reset">
              <span class="button__text"><strong>Открыть</strong> WhatsApp</span>
              <svg class="button__arrow" width="24" height="24">
                <use xlink:href="img/sprite.svg#button-arrow"></use>
              </svg>
            </a>
            <svg class="contacts-section__button-icon" width="28" height="28">
              <use xlink:href="img/sprite.svg#wa-icon"></use>
            </svg>
          </div>
        </div>
      </div>
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
              <use xlink:href="img/sprite.svg#button-arrow"></use>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </section>

</main>

<?php

ct()->footer();
