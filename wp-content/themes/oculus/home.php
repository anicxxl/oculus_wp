<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<div class="main">
  <section class="main-content" style="background-image: url('<?php the_field('main-content-bg-image'); ?>');">
    <div class="container">
      <div class="main-content__inner">
        <h1 class="title main-content__title">
          <?php the_field('main-content-title'); ?>
        </h1>
        <div class="main-content__subtitle">
          <?php the_field('main-content-subtitle'); ?>
        </div>
        <p class="main-content__offer-text">
          <?php the_field('main-content-offer-text'); ?>
        </p>
        <div class="main-content__offer">
          <a class="main-content__offer-link" href="#">
            <?php the_field('main-content-offer-link-text') ?>
          </a>
          <p class="main-content__offer-price ">
            <?php the_field('main-content-offer-price-text'); ?>
          </p>
        </div>
        <p class="main-content__offer-subtext">
          <?php the_field('main-content-offer-subtext'); ?>
        </p>
      </div>
    </div>
  </section>

  <section class="product">
    <div class="container">
      <div class="product__inner">
        <div class="product-tabs__wrapper">
          <h4 class="product__title small-title">
            <?php the_field('product-title'); ?>
          </h4>

          <div class="product-tabs">
            <?php
            // Check rows exist.
            if (have_rows('product-tabs')):
              $first_tab = true; // Флаг для отслеживания первого таба
            
              // Loop through rows.
              while (have_rows('product-tabs')):
                the_row();

                // Проверяем, является ли текущий таб первым
                if ($first_tab) {
                  // Устанавливаем класс "product-tabs__link--active" только для первого таба
                  $tab_class = 'product-tabs__link product-tabs__link--active';
                  $first_tab = false; // Снимаем флаг после установки класса
                } else {
                  $tab_class = 'product-tabs__link';
                }
                ?>

                <a class="<?php echo $tab_class; ?>"
                  href="#product-tabs-content-<?php the_sub_field('product-tab-id'); ?>"><?php the_sub_field('product-tab-name'); ?></a>

              <?php endwhile;

            endif;
            ?>
          </div>

        </div>

        <div class="product-info__wrapper">
          <div class="product-info">
            <h3 class="gradient-title product-info__title">
              <!-- Easy to set up and safe to use -->
              <?php the_field('product-info-title'); ?>
            </h3>
            <img src="<?php the_field('product-info-img'); ?>" alt="device photo">
          </div>

          <div class="product-tabs__content">

            <?php

            // Check rows existexists.
            if (have_rows('product-tab-content')):
              $first_tab_content = true; // Флаг для отслеживания первого таб-контента
            
              // Loop through rows.
              while (have_rows('product-tab-content')):
                the_row();

                // Проверяем, является ли текущий таб-контент первым
                if ($first_tab_content) {
                  // Устанавливаем класс "product-tabs__link--active" только для первого таба
                  $tab_content_class = 'product-tabs__content-box product-tabs__content-box--active';
                  $first_tab_content = false; // Снимаем флаг после установки класса
                } else {
                  $tab_content_class = 'product-tabs__content-box';
                }
                ?>

                <div class="<?php echo $tab_content_class; ?>" id="product-tabs-content-<?php the_sub_field('id'); ?>">
                  <h4 class="product-tabs__content-title">
                    <?php the_sub_field('title'); ?>
                  </h4>
                  <p class="product-tabs__content-text">
                    <?php the_sub_field('text'); ?>
                  </p>
                  <div class="product-tabs__content-video"
                    style="background-image: url('<?php the_sub_field('bg-img'); ?>');">
                    <a class="product-tabs__content-video-link" data-fancybox href="<?php the_sub_field('link'); ?>">
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/play-btn.svg" alt="play icon">
                    </a>
                    <p class="product-tabs__content-video-text">
                      <?php the_sub_field('video-text'); ?>
                    </p>
                  </div>
                </div>

                <?php

                // End loop.
              endwhile;

            endif;

            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="games" id="games">
    <div class="container">
      <h4 class="games__title small-title">
        <?php the_field('games-title'); ?>
      </h4>

      <div class="games__inner">
        <div class="games-info">
          <h3 class="gradient-title games-info__title">
            <?php the_field('games-info-title'); ?>
          </h3>
          <p class="games-info__text">
            <?php the_field('games-info-text'); ?>
          </p>
          <a class="games-info__link" href="#">
            <?php the_field('games-info-link'); ?>
          </a>
        </div>

        <div class="games__items">


          <?php

          // Check rows existexists.
          if (have_rows('games-items')):

            // Loop through rows.
            while (have_rows('games-items')):
              the_row();
              ?>

              <div class="games-item">
                <img src="<?php the_sub_field('img'); ?>" class="games-item__img" alt="<? the_sub_field('alt'); ?>">
                <h5 class="games-item__title">
                  <?php the_sub_field('title'); ?>
                </h5>
                <p class="games-item__text">
                  <?php the_sub_field('text'); ?>
                </p>
                <a class="games-item__link" href="#">
                  <?php the_sub_field('link'); ?>
                </a>
              </div>
              <?php
              // End loop.
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="banner" id="banner">
    <div class="container--big">
      <div class="banner__inner" style="background-image: url('<?php the_field('banner-inner-img'); ?>');">
        <img src="<?php the_field('banner-img'); ?>" class="banner__img" alt="">
        <div class="main-content__offer banner__offer">
          <a class="main-content__offer-link" href="#">
            <?php the_field('main-content-offer-link-text'); ?>
          </a>
          <p class="main-content__offer-price banner__offer-price">
            <?php the_field('main-content-offer-price-text'); ?>
          </p>
        </div>
        <p class="main-content__offer-subtext banner__offer-subtext">
          <?php the_field('main-content-offer-subtext'); ?>
        </p>
      </div>
    </div>
  </section>

  <section class="bundle">
    <div class="container">
      <h4 class="bundle__title small-title">
        <?php the_field('bundle-title'); ?>
      </h4>


      <div class="bundle__items">


        <?php

        // Check rows existexists.
        if (have_rows('bundle-items')):

          // Loop through rows.
          while (have_rows('bundle-items')):
            the_row();

            ?>

            <div class="bundle-item">
              <img src="<?php the_sub_field('img') ?>" class="bundle-item__img" alt="bundle img photo">
              <p class="bundle-item__name">
                <?php the_sub_field('text'); ?>
              </p>
            </div>

            <?php
            // End loop.
          endwhile;


        endif;

        ?>


        <div class="bundle-item">
          <h3 class="gradient-title games-info__title">
            <?php the_field('bundle-item-title'); ?>
          </h3>
        </div>

      </div>
    </div>
  </section>
  <div class="picture" id="picture">
    <div class="container">
      <img src="<?php the_field('picture-img'); ?>" class="picture__img" alt="picture">
    </div>
  </div>

  <section class="accessories" id="accessories">
    <div class="container">
      <h4 class="accessories__title small-title">
        <?php the_field('accessories-title'); ?>
      </h4>
      <h3 class="gradient-title accessories__subtitle">
        <?php the_field('accessories-subtitle'); ?>
      </h3>

      <div class="accessories__items">


        <?php

        // Check rows existexists.
        if (have_rows('accessories-items')):

          // Loop through rows.
          while (have_rows('accessories-items')):
            the_row();
            ?>

            <div class="accessories-item">
              <img src="<?php the_sub_field('img'); ?>" class="accessories-item__img" alt="<?php the_sub_field('alt'); ?>">
              <h5 class="accessories-item__name">
                <?php the_sub_field('name'); ?>
              </h5>
              <p class="accessories-item__text">
                <?php the_sub_field('text'); ?>
              </p>
              <p class="accessories-item__price">
                <?php the_sub_field('price'); ?>
              </p>
              <a class="accessories-item__link" href="#">
                <?php the_sub_field('link'); ?>
              </a>
            </div>

            <?php


            // End loop.
          endwhile;

        endif;

        ?>

      </div>
    </div>
  </section>

  <section class="mailing" id="mailing">
    <div class="container">
      <div class="mailing__inner">
        <div class="mailing__info">
          <h3 class="mailing__title">
            <?php the_field('mailing-title'); ?>
          </h3>
          <form class="mailing-form">
            <?php echo do_shortcode('[contact-form-7 id="136" title="contact form"]'); ?>
          </form>
          <p class="mailing__text">
            <?php the_field('mailing-text'); ?>
          </p>
        </div>

        <div class="mailing__email">
          <a href="mailto:oculusshop@gmail.com" class="mailing__email-link">
            <?php the_field('mailing-email'); ?>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>