<?php

function takascoffee_theme_setup() {
  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Support for Post Thumbnails on posts and pages.
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'takascoffee_theme_setup');