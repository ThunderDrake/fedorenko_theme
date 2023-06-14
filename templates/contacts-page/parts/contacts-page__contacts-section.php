<?php
/**
* Шаблон секции страницы контактов
*/
$whatsapp = get_field('whatsapp', 'option');
$telegram = get_field('telegram', 'option');
 ?>
<section class="contacts-section">
  <div class="contacts-section__container container">
    <div class="contacts-section__image-wrapper">
      <picture>
        <source srcset="<?= ct()->get_static_url() ?>/img/contacts-section__image.webp" type="image/webp">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/contacts-section__image.jpg"
          class="contacts-section__image" width="952" height="688" alt="Президиум на стеклянном полу">
      </picture>
    </div>
    <div class="contacts-section__content">
      <h2 class="contacts-section__title title-text">У ВАС ОСТАЛИСЬ ВОПРОСЫ? ПОЗВОНИТЕ ИЛИ НАПИШИТЕ НАМ!</h2>
      <div class="contacts-section__descr">мы обязательно поможем, если у вас остались какие-то вопросы или сложность
        с выбором.</div>
      <div class="contacts-section__links">
        <?php if ($telegram): ?>
        <div class="contacts-section__button-wrapper">
          <a href="<?php echo $telegram ?>"
            class="contacts-section__button contacts-section__button--telegram button button--no-fill btn-reset">
            <span class="button__text"><strong>Открыть</strong> Telegram</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </a>
          <svg class="contacts-section__button-icon" width="28" height="28">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#tg-icon"></use>
          </svg>
        </div>
        <?php endif; ?>
        <?php if ($whatsapp): ?>
        <div class="contacts-section__button-wrapper">
          <a href="<?php echo $whatsapp ?>"
            class="contacts-section__button contacts-section__button--whatsapp button button--no-fill btn-reset">
            <span class="button__text"><strong>Открыть</strong> WhatsApp</span>
            <svg class="button__arrow" width="24" height="24">
              <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
            </svg>
          </a>
          <svg class="contacts-section__button-icon" width="28" height="28">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#wa-icon"></use>
          </svg>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
