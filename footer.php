  <footer class="footer">
    <?php wp_nav_menu(
        array(
          'theme_location' => 'primary-navigation',
          'container' => 'nav',
          'container_class' => 'footer__site-menu',
          'menu_class' => 'footer__site-menu-list',
        )
    ); ?>
    <a href="/" class="footer__logo">
      <img 
        src="<?php echo esc_url( get_theme_file_uri('/assets/images/common/logo-footer.png') ); ?>"
        alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"
      >
    </a>
    <p class="footer__tel">TEL 01-2345-6789</p>
    <p class="footer__time">OPEN Fri-Sun 11:00-16:00</p>
    <p class="footer__copyright"><small>&copy;Taka's Coffee</small></p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>