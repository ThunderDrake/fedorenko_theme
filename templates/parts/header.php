<?php
/**
шаблон головы(хедера)

*/
$whatsapp = get_field('whatsapp', 'option');
$telegram = get_field('telegram', 'option');
$phone_number = get_field('phone_number' , 'option');
 ?>
<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Nunito-Regular.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Nunito-Light.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/Nunito-Bold.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="<?= ct()->get_static_url() ?>/fonts/PoiretOne-Regular.woff2" as="font"
    crossorigin="anonymous">
  <?php wp_head() ?>
</head>

<body class="page__body">
  <div class="site-container">
    <header class="header">
      <div class="header__container container">
        <a class="header__logo logo" href="/">
          <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/logo.svg" class="logo__image" width="248" height="33"
            alt="Fedorenko Decor - логотип компании">
        </a>
        <nav class="header__nav nav">
          <ul class="nav__list list-reset">
            <li class="nav__item"><a href="#" class="nav__link main-link">Каталог мебели</a></li>
            <li class="nav__item"><a href="weddings.html" class="nav__link main-link">Свадьбы</a></li>
            <li class="nav__item"><a href="#" class="nav__link main-link">Ивенты</a></li>
            <li class="nav__item"><a href="#" class="nav__link main-link">контакты</a></li>
          </ul>
        </nav>
        <button class="header__burger burger btn-reset" aria-label="Открыть меню" aria-expanded="false" data-burger>
          <span class="burger__line"></span>
          <div class="burger__text">Меню</div>
        </button>
        <a class="header__cart cart-widget" href="/cart/">
          <div class="cart-widget__count">234</div>
          <svg class="cart-widget__icon" width="24" height="24">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#basket"></use>
          </svg>
        </a>
      </div>
    </header>
    <div class="burger-menu" data-menu>
      <nav class="burger-menu__nav">
        <ul class="burger-menu__nav-list list-reset">
          <div class="burger-menu__nav-list--mobile">
            <li class="burger-menu__nav-item"><a class="burger-menu__nav-link main-link" href="#">Каталог мебели</a>
            </li>
            <li class="burger-menu__nav-item"><a class="burger-menu__nav-link main-link" href="#">Свадьбы</a></li>
            <li class="burger-menu__nav-item"><a class="burger-menu__nav-link main-link" href="#">Ивенты</a></li>
          </div>
          <li class="burger-menu__nav-item burger-menu__nav-item--with-image"><a class="burger-menu__nav-link main-link"
              href="#">О нас</a></li>
          <li class="burger-menu__nav-item"><a class="burger-menu__nav-link main-link" href="#">Условия работы /
              Аренды</a></li>
          <li class="burger-menu__nav-item"><a class="burger-menu__nav-link main-link" href="#">Организация
              мероприятий</a></li>
          <li class="burger-menu__nav-item"><a class="burger-menu__nav-link main-link" href="#">Контакты</a></li>
        </ul>
      </nav>
      <a href="/" class="burger-menu__button button button--no-fill btn-reset">
        <span class="button__text">Оставить заявку</span>
        <svg class="button__arrow" width="24" height="24">
          <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
        </svg>
      </a>
      <div class="burger-menu__footer-link link-underline">
      <?php
        if ($telegram):
           ?>

          <a href="<?php $telegram ?>" class="burger-menu__footer-link link-underline">Telegram</a>
          <?php

        else:
          ?>
          <a href="#" class="burger-menu__footer-link link-underline">Telegram</a>
          <?php
          endif;
        ?>
        <?php
        if ($whatsapp):
           ?>
          <a href="<?php echo $whatsapp ?>" class="burger-menu__footer-link link-underline">Whatsapp</a>
          <?php
        else:
          ?>
          <a href="#" class="burger-menu__footer-link link-underline">Whatsapp</a>
          <?php
          endif;
        ?>
        <?php
        if ($phone_number):
           ?>
          <a href="tel:<?php echo $phone_number ?>" class="burger-menu__footer-link link-underline"><?php echo $phone_number ?></a>

          <?php
        else:
          ?>
          <a href="tel:+7(963)163-27-03" class="burger-menu__footer-link link-underline">+7(963)163-27-03</a>
          <?php
          endif;
        ?>

      </div>
    </div>
