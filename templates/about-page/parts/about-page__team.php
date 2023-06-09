<?php
/**
 * Шаблон блока Команда
 */

?>

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
