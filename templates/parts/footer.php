<?php
/**
* Шаблон подвала
*/
$whatsapp = get_whatsapp_link();
$telegram = get_telegram_link();
$phone_number = get_phone_number();
 ?>


<footer class="footer">
  <div class="footer__image">
    <div class="container">
      <picture>
        <source media="(max-width: 576px)" srcset="<?= ct()->get_static_url() ?>/img/footer__image-mobile.webp"
          type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= ct()->get_static_url() ?>/img/footer__image-mobile.jpg">
        <source srcset="<?= ct()->get_static_url() ?>/img/footer__image.webp" type="image/webp">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/footer__image.jpg" class="image" width="1568"
          height="426" alt="Фотография нашей команды">
      </picture>
    </div>
  </div>
  <div class="footer__contacts">
    <div class="container">
      <div class="footer__grid">
        <div class="footer-empty"></div>
        <?php if ($telegram): ?>
          <a href="<?= $telegram ?>" class="footer__contacts-link link-underline">Telegram</a>
        <?php endif; ?>
        <?php if ($whatsapp): ?>
          <a href="<?= $whatsapp ?>" class="footer__contacts-link link-underline">Whatsapp</a>
        <?php endif; ?>
        <?php if ($phone_number): ?>
          <a href="tel:<?= cth()->format_phone($phone_number) ?>" class="footer__contacts-link link-underline"><?= $phone_number ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="footer__content">
    <div class="container">
      <div class="footer__grid">
        <div class="footer__logo-block">
          <a class="footer__logo logo" href="/">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="logo_image" width="248"
              height="33" alt="Fedorenko Decor - логотип компании">
          </a>
          <div class="footer__copy">© ВСЕ ПРАВА ЗАЩИЩЕНЫ</div>
        </div>
        <nav class="footer__nav nav">
          <ul class="nav__list list-reset">
            <li class="nav__item"><a href="#" class="nav__link">Каталог мебели</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Свадьбы</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Ивенты</a></li>
          </ul>
        </nav>
        <nav class="footer__nav nav">
          <ul class="nav__list list-reset">
            <li class="nav__item"><a href="#" class="nav__link">О нас</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Условия аренды</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Контакты</a></li>
          </ul>
        </nav>
        <a class="footer__policy" href="#">Политика конфиденциальности</a>
      </div>
    </div>
  </div>
  <div class="footer__developers">
    <div class="container">
      <div class="footer__developers-item">
        <span class="footer__developers-title">Designed</span>
        <a class="footer__developers-link link-underline" href="#">Anastasia Kostromina</a>
      </div>
      <div class="footer__developers-item">
        <span class="footer__developers-title">Developed</span>
        <a class="footer__developers-link link-underline" href="#">Timofey Krivenkov</a>
      </div>
    </div>
  </div>
</footer>

<div class="graph-modal">
  <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="modal-form">
    <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
    <div class="graph-modal__content">
      <div class="form-section__container container">
        <div class="form-section__header">
          <h2 class="form-section__title title-text">Если вы затрудняетесь подобрать стиль самостоятельно, оставьте
            заявку
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
    </div>
  </div>
</div>

<?php wp_footer() ?>
</div>
</body>

</html>
