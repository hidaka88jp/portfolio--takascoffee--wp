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
    <p class="footer__copyright">
      <small>
        &copy;2026 Takanori Hidaka<br>
        Taka's Coffee is a fictional project created for portfolio purposes.<br>
        The design is based on exercises from the Japanese book 
        <a href="https://gihyo.jp/book/2022/978-4-297-12510-3" target="_blank" rel="noopener noreferrer" class="footer__copyright-link">"HTML&CSSとWebデザインが1冊できちんと身につく本"</a>.
      </small>
    </p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>