<?php get_header(); ?>

<main>
  <div class="hero">
    <div class="hero__text">
      <h1 class="hero__heading">Every great idea <br>begins with coffee.</h1>
      <p class="hero__subheading">Even waiting for your coffee becomes a special moment.</p>
    </div>
  </div><!-- /.hero -->
  <div class="lead">
    <p class="lead__quote">“Imagination can take you anywhere.”</p>
    <p class="lead__sentence">
      A line I found in a book I opened while waiting for my order.<br>
      In the gentle flow of time, I remember the joy of letting my thoughts wander.<br>
      And in moments like these, a good cup of coffee makes it even better.
    </p>
    <div class="lead__link-button-area">
      <a href="/concept" class="link-button">CONCEPT</a>
    </div>
  </div><!-- /.lead -->
  <div class="recommended">
      <h2 class="recommended__heading">RECOMMENDED</h2>
      <ul class="recommended__item-list">
        <li class="recommended__items">
          <img 
            src="<?php echo esc_url( get_theme_file_uri('/assets/images/dev/img-item-sample.jpg') ); ?>"
            alt="商品画像"
            class="recommended__item-image"
          >
          <dl class="recommended__item-desc">
            <dt class="recommended__item-name">CAFE LATTE</dt>
            <dd class="recommended__item-sentence">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
          </dl>
          <p class="recommended__price">$4.6</p>
        </li>
      </ul>
      <div class="recommended__link-button-area">
        <a href="/menu" class="link-button">MENU</a>
      </div>
  </div><!-- /.recommended -->
</main>

<?php get_footer(); ?>