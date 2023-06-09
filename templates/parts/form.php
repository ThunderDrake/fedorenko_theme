<?php
/**
 * Шаблон формы
 */
?>
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
