<div class="inner-header">
  <div class="inner-header__container container">
    <h1 class="inner-header__title title-text"><?= get_queried_object()->label ?></h1>
    <div class="breadcrumbs-block">
      <nav class="breadcrumbs-block__nav">
        <ul class="list-reset breadcrumbs-block__list">
          <li class="breadcrumbs-block__list-item">
            <a class="breadcrumbs-block__item" href="/">Главная</a>
          </li>
          <li class="breadcrumbs-block__list-item">
            <span class="breadcrumbs-block__item"><?= get_queried_object()->label ?></span>
          </li>
        </ul>
      </nav>
    </div>

  </div>
</div>
