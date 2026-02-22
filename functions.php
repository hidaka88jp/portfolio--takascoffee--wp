<?php

function takascoffee_theme_setup() {
  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'takascoffee_theme_setup');

function takascoffee_enqueue_styles() {
  wp_enqueue_style(
    'takascoffee-style',
    get_stylesheet_uri(),
    [],
    filemtime(get_template_directory() . '/style.css')
  );
}

add_action('wp_enqueue_scripts', 'takascoffee_enqueue_styles');