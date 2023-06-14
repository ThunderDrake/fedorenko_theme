<?php

$faq_in = get_sub_field('faq_in', 'option');
$faq_image_id = get_sub_field('faq_image_id', 'option');
$faq_title = get_sub_field('faq_title', 'option');
$faq_btn = get_sub_field('faq_btn', 'option') ?: 'узнать больше';
$faq_url = get_sub_field('faq_url', 'option') ? get_sub_field('faq_url', 'option') : '#';

?>
<section class="conditions-pcg">

  <div class="container conditions-pcg__container">
    <?php
        if ($faq_image_id) {
          ?>
    <picture>
      <source srcset="<?php echo wp_get_attachment_image_url($faq_image_id, 'full'); ?>" type="image/webp">
      <img loading="lazy" src="<?php echo wp_get_attachment_image_url($faq_image_id, 'full'); ?>"
        class="conditions-pcg__pic" width="1575" height="400" alt="красивые столы">
    </picture>
    <?php } ?>

    <div class="conditions-pcg__flex-title">
      <?php
        if ($faq_title) { ?>
      <h2 class="conditions-pcg__title-text title-text">
        <?php echo $faq_title?>
      </h2>
      <?php } ?>

      <a href="<?= $faq_url ?>" class="team__button button button--no-fill">

        <?php if ($faq_btn): ?>
          <span class="button__text"><?php echo $faq_btn ?></span>
        <?php endif; ?>

        <svg class="button__arrow" width="24" height="24">
          <use xlink:href="<?= ct()->get_static_url() ?>/img/sprite.svg#button-arrow"></use>
        </svg>

      </a>
    </div>
    <ul class="accordion__list">
      <?php
        if( have_rows('faq_in', 'option') ) {
          while( have_rows('faq_in', 'option')) { the_row();
            ?>
      <li class="accordion">
        <button class="accordion__control" aria-expanded="false">
          <span class="accordion__title title-text">
            <?php
                if (get_sub_field('faq_question', 'option')) {
                  echo get_sub_field('faq_question', 'option');
                     }
                ?>
          </span>
          <span class="accordion__icon">
          </span>
        </button>
        <div class="accordion__content" aria-hidden="true">
          <span class="accordion__text small-text">
            <?php
                  if (get_sub_field('faq_answer_l', 'option')) {
                    echo get_sub_field('faq_answer_l', 'option');
                      }
                  ?>
          </span>
          <span class="accordion__text small-text">
            <?php
                  if (get_sub_field('faq_answer_r', 'option')) {
                    echo get_sub_field('faq_answer_r', 'option');
                      }
                ?>
          </span>
        </div>
      </li>
      <?php
          }
        }
        ?>
    </ul>

  </div>
</section>
