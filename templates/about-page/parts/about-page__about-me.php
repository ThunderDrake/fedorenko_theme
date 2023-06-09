<?php
/**
 * Шаблон секции Обо мне
 */
?>

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
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-1.jpg" width="952"
            height="776" alt="Три девушки стоят в листве">
        </picture>
      </div>
      <div class="about-me__small-image">
        <picture>
          <source srcset="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-2.webp" type="image/webp">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/about-me/about-me__image-2.jpg" width="600"
            height="776" alt="Екатерина смотрит наверх на фоне листвы">
        </picture>
      </div>
    </div>
  </div>
</section>
