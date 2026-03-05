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
      <a href="<?php echo esc_url( home_url('/concept/') ); ?>" class="link-button">
        CONCEPT
      </a>
    </div>
  </div><!-- /.lead -->

  <div class="recommended">
    <h2 class="recommended__heading">RECOMMENDED</h2>
    <div class="recommended__scroll">
      <ul class="recommended__item-list">
        <?php
          $args = [
            'post_type' => 'menu',
            'meta_query' => [
              [
                'key' => 'recommended',
                'value' => 1,
              ]
            ],
            'orderby' => 'menu_order',
            'order'   => 'ASC',
          ];

          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
        <li class="recommended__items">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', [
              'class' => 'recommended__item-image'
            ]); ?>
          <?php endif; ?>
          <dl class="recommended__item-desc">
            <dt class="recommended__item-name"><?php the_title(); ?></dt>
            <dd class="recommended__item-sentence"><?php the_excerpt(); ?></dd>
          </dl>
          <p class="recommended__price">$<?php echo esc_html( get_field('price') ); ?></p>
        </li>
        <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
      </ul>
    </div><!-- /.recommended__scroll -->
    <div class="recommended__link-button-area">
      <a href="<?php echo esc_url( home_url('/menu/') ); ?>" class="link-button">
        MENU
      </a>
    </div>
  </div><!-- /.recommended -->
</main>

<?php get_footer(); ?>