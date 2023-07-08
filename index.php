<?php
/*
Template Name: Главная
*/
get_header();
?>


<section class="site-intro" id="header">
  <img class='site-intro__background-image' src="<?= CFS()->get('background_header'); ?>" alt="background-image">
  <div class="site-intro__wrapper">
    <div class="site-intro__body">
      <div class="site-intro__header">
        <h1 class="site-intro__title">
          <?= CFS()->get('header_title'); ?>
        </h1>
        <div class="site-intro__time-items">
          <?php
          $loop = CFS()->get('header_time_items');
          foreach ($loop as $row) {
            ?>
            <div class="site-intro__time-item">
              <div class="site-intro__time-item-body">
                <div class="site-intro__time-number">
                  <?= $row['header_time_digit'] ?>
                </div>
                <div class="site-intro__time-name">
                  <?= $row['header_time_name'] ?>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
      <div class="site-intro__stat-wrapper">
        <div class="site-intro__stat-body stat-body">
          <a href="#" class="stat-body__button button button--order">
            <?= CFS()->get('header_order'); ?>
          </a>
          <div class="stat-body__participants">
            <div class="stat-body__participants-all">
              <p class="stat-body__participants-desc">Участников всего:</p>
              <span>
                <?= CFS()->get('participants'); ?>
              </span>
            </div>
            <div class="stat-body__participants-finished">
              <p class="stat-body__participants-desc">Успешно закончили курс:</p>
              <span>
                <?= CFS()->get('finished_participants'); ?>
              </span>
            </div>
          </div>
          <div class="stat-body__salary salary">
            <div class="salary__earned">
              <p class="salary__earned-desc">Заработано участниками:</p>
              <span>
                <?= CFS()->get('profit'); ?>
              </span>
            </div>
            <div class="salary__line-progress line-progress">
              <div class="line-progress__behind-line"></div>
            </div>
            <div class="salary__goalToEarn">
              <div class="salary__goalToEarn-start">
                <?= CFS()->get('start_profit'); ?>
              </div>
              <div class="salary__goalToEarn-target">
                <?= CFS()->get('target_profit'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <main>
    <section class="about-us">
      <div class="about-us__wrapper">
        <div class="about-us__body">
          <div class="about-us__content">
            <img class="about-us__content-image" src="<?= CFS()->get('about_us_image'); ?>"
              alt="<?= CFS()->get('about_us_image_desc'); ?>" />
            <div class="about-us__content-text">
              <h2 class="about-us__content-title">
                <?= CFS()->get('about_us_head'); ?>
              </h2>
              <p class="about-us__content-description">
                <?= CFS()->get('about_us_desc'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="start" id="courses">
      <div class="start__wrapper">
        <div class="start__body">
          <div class="start__header-block">
            <div class="start__header section-header">
              <div class="section-header__logo section-logo">
                <img class="section-logo__image section-image" src="<?= CFS()->get('result_logo'); ?>"
                  alt="section-logo" />
              </div>
              <h2 class="section-header__name section-name">
                <?= CFS()->get('result_header'); ?>
              </h2>
            </div>
            <div class="start__section-description section-description">
              <p>
                <?= CFS()->get('result_header_desc'); ?>
              </p>
            </div>
          </div>
          <div class="start__progress-items progress-items">
            <?php
            $loop = CFS()->get('result_items');
            foreach ($loop as $row) {
              ?>
              <div class="progress-items__item">
                <h3 class="progress-items__item-header">
                  <?= $row['result_item_progress'] ?>
                </h3>
                <div class="progress-items__item-view"></div>
                <p class="progress-items__item-description">
                  <?= $row['result_item_desc'] ?>
                </p>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="profession">
      <div class="profession__wrapper">
        <div class="profession__body">
          <h2 class="profession__section-name section-name section-name--center">
            <?= CFS()->get('profession_header'); ?>
          </h2>
          <div class="profession__items">
            <?php
            $loop = CFS()->get('profession_items');
            foreach ($loop as $row) {
              ?>
              <div class="profession__item">
                <img class="profession__item-image" src="<?= $row['profession_item_image'] ?>" alt="profession-image" />
                <h3 class="profession__item-header">
                  <?= $row['profession_item_header'] ?>
                </h3>
                <p class="profession__item-description">
                  <?= $row['profession_item_desc'] ?>
                </p>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="program-study" id="study">
      <div class="program-study__wrapper">
        <div class="program-study__body">
          <div class="program-study__header-block">
            <div class="program-study__section-logo section-logo">
              <img class="program-study__section-image section-image" src="<?= CFS()->get('programm_study_logo'); ?>"
                alt="section-logo" />
            </div>
            <h2 class="program-study__section-name section-name section-name--center">
              <?= CFS()->get('programm_study_head'); ?>
            </h2>
            <p class="program-study__section-description section-description section-description--center">
              <?= CFS()->get('programm_study_desc'); ?>
            </p>
          </div>
          <div class="program-study__items">
            <?php
            $loop = CFS()->get('programm_study_time-line_items');
            foreach ($loop as $row) {
              ?>
              <div class="program-study__item">
                <span class="program-study__item-week">
                  <?= $row['programm_study_time-line_week'] ?>
                </span> <br />
                <br />
                <?= $row['programm_study_time-line_desc'] ?>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="teachers" id="teachers">
      <div class="teachers__wrapper">
        <div class="teachers__body">
          <div class="teachers__header section-header _header-column">
            <div class="section-header__logo section-logo">
              <img class="section-logo__image section-image" src="<?= CFS()->get('teachers_logo'); ?>"
                alt="section-logo" />
            </div>
            <h2 class="section-header__name section-name">
              <?= CFS()->get('teachers_head'); ?>
            </h2>
          </div>
          <div class="teachers__items">
            <?php
            $loop = CFS()->get('teachers_items');
            foreach ($loop as $row) {
              ?>
              <div class="teachers__item">
                <img class="teachers__item-image" src="<?= $row['teachers_items_image'] ?>" alt="teacher-image" />
                <h3 class="teachers__item-name">
                  <?= $row['teachers_items_name'] ?>
                </h3>
                <p class="teachers__item-position">
                  <?= $row['teachers_items_skills'] ?>
                </p>
                <a class="teachers__item-button button button--biography" href="#" target="_blank">
                  <?= $row['teachers_items_button'] ?>
                </a>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="partners">
      <div class="partners__wrapper">
        <div class="partners__body">
          <div class="partners__header section-header">
            <div class="section-header__logo section-logo">
              <img class="section-logo__image section-image" src="<?= CFS()->get('brands_logo'); ?>"
                alt="section-logo" />
            </div>
            <h2 class="section-header__name section-name">
              <?= CFS()->get('brands_head'); ?>
            </h2>
          </div>
          <div class="partners__items">
            <?php
            $loop = CFS()->get('brands_items');
            foreach ($loop as $row) {
              ?>
              <div class="partners__item">
                <a class="partners__item-link" href="<?= $row['brands_items_link']['url'] ?>"
                  target="<?= $row['brands_items_link']['target'] ?>"><img class="partners__item-image"
                    src="<?= $row['brands_items_image'] ?>" alt="<?= $row['brands_items_image-name'] ?>" /></a>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>