<?php
/**
 * Шаблон отзывов
 */

$review_list = get_field('review_list', 'option');



if( have_rows('review_list', 'option') ) {?>

  <section class="review">
      <div class="review__container container">
        <h2 class="review__title title-text">Что говорят клиенты</h2>
      </div>
      <div class="review__slider-outer">
        <div class="swiper review__slider">
          <div class="swiper-wrapper review__slider-wrapper">
              <?php while( have_rows('review_list', 'option')) : the_row(); ?>
                <div class="swiper-slide review__slider-slide">
                  <div class="review__item">
                    <div class="review__item-image-wrapper">
                      <?php
                      if (get_sub_field('image_id')) {
                        ?>
                        <img loading="lazy" src="<?php echo wp_get_attachment_image_url(get_sub_field('image_id'), 'full'); ?>" alt="Логтип компании" class="review__item-image" width="72" height="72">
                        <?php
                      }
                      else {
                        ?>
                        <img loading="lazy" src="<?= ct()->get_static_url() ?>/img/review/review-svg.svg" class="review__item-image" width="72" height="72"
                        alt="Логтип компании">
                        <?php
                      }
                         ?>
                    </div>
                    <div class="review__item-names"><?php
                        if(the_sub_field('client')) {
                          the_sub_field('client');
                        }?>
                    </div>
                    <h3 class="review__item-company">
                      <?php
                        if(the_sub_field('company')) {
                          the_sub_field('company');
                        }?> / <?php
                          if(the_sub_field('event_name')) {
                            the_sub_field('event_name');
                          }?>
                    </h3>
                    <p class="review__item-descr">
                        <?php
                        if(the_sub_field('description')) {
                          the_sub_field('description');
                        }?>
                    </p>
                  </div>
                </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="review__controls">
        <div class="swiper-button-prev review__nav-button">
          <svg class="review__nav-button-icon" width="13" height="8">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#arrow-swiper-prev"></use>
          </svg>
        </div>
        <div class="swiper-pagination review__pagination"></div>
        <div class="swiper-button-next review__nav-button">
          <svg class="review__nav-button-icon" width="13" height="8">
            <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#arrow-swiper-next"></use>
          </svg>
        </div>
      </div>
    </section>

<?php
}

?>

