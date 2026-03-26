<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (is_singular()): ?>
  <?php
    $description = get_the_excerpt() ?: get_bloginfo('description');
    $og_image = get_the_post_thumbnail_url(null, 'large') ?: get_template_directory_uri() . '/assets/images/common/ogp.jpg';
  ?>
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
  <?php else: ?>
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/common/ogp.jpg">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
  <?php endif; ?>
  <meta property="og:type" content="website">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header__inner">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="header__logo">
        <img 
          class="site-logo"
          src="<?php echo esc_url( get_theme_file_uri('/assets/images/common/logo-header.png') ); ?>"
          alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"
        >
      </a>
      <button 
        type="button"
        class="header__toggle-menu-btn" 
        id="menu-btn"
        aria-label="Toggle menu"
        aria-expanded="false"
        aria-controls="site-menu"
      ></button>
      <div class="header__site-menu" id="site-menu">
        <?php wp_nav_menu(
            array(
              'theme_location' => 'primary-navigation',
              'container' => 'nav',
              'container_class' => 'header__site-menu-inner',
              'menu_class' => 'header__site-menu-list',
            )
        ); ?>
      </div>
    </div><!-- /.header__inner -->
  </header>
  <div class="overlay"></div>