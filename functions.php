<?php

function takascoffee_theme_setup() {
  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');
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
}

add_action('wp_enqueue_scripts', 'takascoffee_enqueue_styles');