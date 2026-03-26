<?php get_header(); ?>

<main class="page-content">
  <div class="not-found">
    <img 
      class="not-found__image"
      src="<?php echo esc_url( get_theme_file_uri('/assets/images/common/404.webp') ); ?>"
      alt="404 Not Found"
    >
    <div class="not-found__text-area">
      <h1 class="not-found__title">404 - Not Found</h1>
      <p class="not-found__text">Sorry, the page you’re looking for doesn’t exist.</p>
      <div class="not-found__link-button-area">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="link-button">
          Back to Home
        </a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>