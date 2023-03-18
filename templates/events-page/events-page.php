<?php
/**
* Шаблон Главной страницы
*/

ct()->header();
?>

<main class="main">
  <div class="inner-header">
    <div class="inner-header__container container">
      <h1 class="inner-header__title title-text">Организация мероприятия под ключ</h1>
      <div class="breadcrumbs-block">
        <nav class="breadcrumbs-block__nav">
          <ul class="list-reset breadcrumbs-block__list">
            <li class="breadcrumbs-block__list-item">
              <a class="breadcrumbs-block__item" href="/">Главная</a>
            </li>
            <li class="breadcrumbs-block__list-item">
              <span class="breadcrumbs-block__item">Организация мероприятия под ключ</span>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </div>

  <section class="onemore">
    <div class="container onemore__container">
      <div class="onemore__picture-container">
        <picture>
          <source srcset="img/onemore-pic1.webp" type="image/webp">
          <img loading="lazy" src="img/onemore-pic1.jpg" class="onemore__pic1" width="424" height="688"
            alt="Катерина сидит">
        </picture>
        <picture>
          <source srcset="img/onemore-pic2.webp" type="image/webp">
          <img loading="lazy" src="img/condition-pic2.jpg" class="onemore__pic2" width="336" height="668"
            alt="Катерина сидит">
        </picture>
      </div>
      <div class="onemore__text-block">
        <h2 class="onemore__title-text title-text">
          Давайте еще раз познакомимся.
        </h2>
        <p class="onemore__text small-text">
          Меня зовут Федоренко Екатерина. В ивент бизнесе я больше 13 лет.
        </p>
        <p class="onemore__text small-text">
          И я знаю как сделать Ваш праздник незабываемым.
        </p>
        <p class="onemore__text onemore__text--margin small-text">
          Вот немного ответов на вопросы что бы Вам было легче понять зачем Вам организатор и чем он занимается.
        </p>
      </div>
    </div>
  </section>

  <section class="why-org">
    <div class="container why-org__container">
      <h2 class="why-org__title-text title-text">
        ЗАЧЕМ МНЕ ОРГАНИЗАТОР!
        ЧЕМ ОН ВООБЩЕ ЗАНИМАЕТСЯ?
      </h2>
      <div class="why-org__content">
        <div class="why-org__text-block">
          <p class="why-org__text small-text">
            Самое распространённое заблуждение
            это — Зачем мне организатор, я всех могу найти сама.
          </p>
          <p class="why-org__text small-text">
            Так вот! Организатор это не тот кто даст Вам контакт
            хорошего специалиста.
          </p>
          <p class="why-org__text small-text">
            Организатор делает так что бы на вашей свадьбе этот специалист
            был хорош.
          </p>
          <p class="why-org__text small-text">
            Так часто бывает что фото в Инстаграмм хорошее. Специалист
            красиво рассказывает о себе. Ресторан вроде проверенный.
            А на деле все это оказывается обманом. Вы и представить не
            можете сколько задач приходится решать в процессе подготовки
            к свадьбе. А в этом ещё нужно разбираться и знать на что обратить
            внимание и где подстраховаться.
          </p>
        </div>
        <div class="why-org__picture-container">
          <picture>
            <source srcset="img/why-org-pic1.webp" type="image/webp">
            <img loading="lazy" src="img/why-org-pic1.jpg" class="why-org__pic1" width="336" height="688"
              alt="Катерина сидит">
          </picture>
          <picture>
            <source srcset="img/why-org-pic2.webp" type="image/webp">
            <img loading="lazy" src="img/condition-pic2.jpg" class="why-org__pic2" width="424" height="668"
              alt="Катерина сидит">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section class="good-org">
    <div class="container good-org__container">
      <h2 class="good-org__title-text title-text">
        Хороший организатор
        знает все тонкости. И делает так, что бы
        на свадьбе все работало как часы.
      </h2>
      <div class="good-org__content">

        <div class="good-org__picture-container">
          <picture>
            <source srcset="img/good-org-pic.webp" type="image/webp">
            <img loading="lazy" src="img/good-org-pic.png" class="good-org__pic" width="776" height="1024"
              alt="Катерина сидит">
          </picture>
        </div>
        <div class="good-org__text-block">
          <p class="good-org__text small-text">
            Все специалисты приехали во время.
          </p>
          <p class="good-org__text small-text">
            Что бы ничего не отвлекало их от прямых обязанностей.
          </p>
          <p class="good-org__text small-text">
            Все было в своё время и на своих местах.
          </p>
          <p class="good-org__text small-text">
            Если возникнет форс-мажор. А он обязательно будет. Ни одно мероприятие без этого не обходится. Профессионал
            решит его быстро и не заметно.
          </p>
          <p class="good-org__text small-text">
            Что бы все гости были окружены вниманием и заботой.
          </p>
          <p class="good-org__text good-org__text--margin small-text">
            А вы на своей свадьбе отдыхали.
          </p>
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
