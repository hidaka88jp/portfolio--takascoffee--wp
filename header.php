<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <button class="header__toggle-menu-btn" id="menu-btn"></button>
      <div class="header__site-menu">
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