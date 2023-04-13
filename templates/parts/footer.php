<?php
/**
шаблон подвала

*/
$whatsapp = get_field('whatsapp', 'option');
$telegram = get_field('telegram', 'option');
$phone_number = get_field('phone_number' , 'option');
 ?>


<footer class="footer">
  <div class="footer__image">
    <div class="container">
      <picture>
        <source media="(max-width: 576px)" srcset="<?= ct()->get_static_url() ?>/img/footer__image-mobile.webp" type="image/webp">
        <source media="(max-width: 576px)" srcset="<?= ct()->get_static_url() ?>/img/footer__image-mobile.jpg">
        <source srcset="<?= ct()->get_static_url() ?>/img/footer__image.webp" type="image/webp">
        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/footer__image.jpg" class="image" width="1568" height="426"
          alt="Фотография нашей команды">
      </picture>
    </div>
  </div>
  <div class="footer__contacts">
    <div class="container">
      <div class="footer__grid">
        <div class="footer-empty"></div>
        <?php
        if ($telegram):
           ?>

          <a href="<?php $telegram ?>" class="footer__contacts-link link-underline">Telegram</a>
          <?php

        else:
          ?>
          <a href="#" class="footer__contacts-link link-underline">Telegram</a>
          <?php
          endif;
        ?>
        <?php
        if ($whatsapp):
           ?>
          <a href="<?php echo $whatsapp ?>" class="footer__contacts-link link-underline">Whatsapp</a>
          <?php
        else:
          ?>
          <a href="#" class="footer__contacts-link link-underline">Whatsapp</a>
          <?php
          endif;
        ?>
        <?php
        if ($phone_number):
           ?>
          <a href="tel:<?php echo $phone_number ?>" class="footer__contacts-link link-underline"><?php echo $phone_number ?></a>

          <?php
        else:
          ?>
          <a href="tel:+7(963)163-27-03" class="footer__contacts-link link-underline">+7(963)163-27-03</a>
          <?php
          endif;
        ?>

      </div>
    </div>
  </div>
  <div class="footer__content">
    <div class="container">
      <div class="footer__grid">
        <div class="footer__logo-block">
          <a class="footer__logo logo" href="/">
            <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="logo_image" width="248" height="33"
              alt="Fedorenko Decor - логотип компании">
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

<?php wp_footer() ?>
</div>
</body>

</html>
