<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <title>PC-building</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__wrapper">
      <div class="header__body">
        <div class="header__left-side">
          <?php the_custom_logo(); ?>
          <nav class="header__left-side-menu menu">
            <ul class="menu__list">
              <li class="menu__list-item"><a class="menu__list-item-link" href="<?= get_home_url(); ?>"><?= CFS()->get('menu_main_name'); ?></a>
              </li>
              <li class="menu__list-item"><a class="menu__list-item-link" href="#courses">
                  <?= CFS()->get('menu_courses_name'); ?>
                </a></li>
              <li class="menu__list-item"><a class="menu__list-item-link" href="#study">
                  <?= CFS()->get('menu_study_name'); ?>
                </a></li>
              <li class="menu__list-item"><a class="menu__list-item-link" href="#teachers">
                  <?= CFS()->get('menu_teachers_name'); ?>
                </a></li>
              <li class="menu__list-item"><a class="menu__list-item-link" href="#footer">
                  <?= CFS()->get('menu_footer_name'); ?>
                </a></li>
              <li class="menu__list-item"><a class="menu__list-item-link" href='#'>
                  <?= CFS()->get('menu_contacts_name'); ?>
                </a>
                <ul class="sub-menu__contacts">
                  <?php
                  $loop = CFS()->get('menu_contacts_items');
                  foreach ($loop as $row) {
                    $spec = '@';
                    $iconletter = '<i class="fa-regular fa-envelope fa-lg"></i>';
                    $iconphone = '<i class="fa-solid fa-phone fa-lg"></i>';
                    $text = $row['menu_contact_link']['text'];
                    if (strpos($text, $spec)) {
                      $text = $iconletter . $text;
                    } else {
                      $text = $iconphone . $text;
                    }
                    ?>
                    <li class="sub-menu__contacts-item"><a class="sub-menu__contacts-item-link"
                        href="<?= $row['menu_contact_link']['url'] ?>" alt="<?= $row['menu_contact_link_desc'] ?>">
                        <?= $text ?>
                      </a></li>
                    <?php
                  }
                  ?>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__right-side">
          <a data-da=".menu__list,768,first" class="header__right-side-button button button--login" href="#">
            <?= CFS()->get('header_login'); ?>
          </a>
          <div class="header__right-side-burger"><span></span></div>
        </div>
      </div>
    </div>
  </header>