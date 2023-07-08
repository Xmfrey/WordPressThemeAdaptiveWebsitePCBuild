<?php
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
add_action('after_setup_theme', 'add_menu');
add_action('after_setup_theme', 'add_features');
add_theme_support('custom-logo');

function add_scripts_and_styles()
{

  wp_enqueue_script('scripts', get_template_directory_uri() . './assets/js/app.js', false, null, true);

  wp_enqueue_style('font-awesome', get_template_directory_uri() . './assets/css/all.min.css');

  wp_enqueue_style('style', get_stylesheet_uri());
}

function add_features()
{
  add_theme_support('post-thumbnails', array('post'));
}

function add_menu()
{
  register_nav_menu('top', 'Главное меню сайта');
}
?>