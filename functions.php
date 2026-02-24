<?php

function takascoffee_theme_setup() {
  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');

  // Register a single navigation menu location named "Top Navigation".
  register_nav_menus(
    array(
      'primary-navigation' => 'Primary Navigation',
    )
  );
}

add_action('after_setup_theme', 'takascoffee_theme_setup');

function takascoffee_enqueue_styles() {
  // Enqueue the main stylesheet with a version number based on the file modification time for cache busting.
  wp_enqueue_style(
    'takascoffee-style',
    get_theme_file_uri('/assets/css/style.css'),
    [],
    filemtime(get_template_directory() . '/assets/css/style.css')
  );

  // Enqueue Google Fonts.
  wp_enqueue_style(
    'takascoffee-google-fonts',
    'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap',
    [],
    null
  );

  // Enqueue the JavaScript file with a version number based on the file modification time for cache busting.
  wp_enqueue_script(
    'takascoffee-main',
    get_theme_file_uri('/assets/js/main.js'),
    [],
    filemtime(get_theme_file_path('/assets/js/main.js')),
    true
  );
}

add_action('wp_enqueue_scripts', 'takascoffee_enqueue_styles');