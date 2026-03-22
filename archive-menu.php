<?php get_header(); ?>

<main class="page-content menu">
  <div class="page-hero">
    <?php esc_html_e('Menu', 'takascoffee'); ?>
  </div>

  <ul class="menu-list">
    <?php
      // Fixed category order based on UI requirements (drink → food → dessert)
      $categories = ['drink', 'food', 'dessert'];

      foreach ($categories as $category) :
        $query = new WP_Query([
          'post_type' => 'menu',
          'posts_per_page' => -1,
          'tax_query' => [
            [
              'taxonomy' => 'menu_category',
              'field' => 'slug',
              'terms' => $category,
            ]
          ]
        ]);

        if ($query->have_posts()) :
    ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="menu-list__items">
              <a href="<?php echo esc_url(get_permalink()); ?>" class="menu-list__link">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <dl class="menu-list__item-desc">
                  <dt class="menu-list__item-name"><?php the_title(); ?></dt>
                  <dd class="menu-list__item-sentence"><?php the_excerpt(); ?></dd>
                </dl>
                <?php
                  $price = function_exists('get_field') ? get_field('price') : '';
                  if ($price) :
                ?>
                  <p class="menu-list__price">
                    $<?php echo esc_html($price); ?>
                  </p>
                <?php endif; ?>
                <?php
                  $terms = get_the_terms( get_the_ID(), 'menu_category' );
                  if ( $terms && ! is_wp_error( $terms ) ) :
                ?>
                  <p class="menu-list__category"><?php echo esc_html($terms[0]->name); ?></p>
                <?php
                  endif;
                ?>
              </a>
            </li>
          <?php endwhile; ?>
    <?php
        endif;
        wp_reset_postdata();
      endforeach;
    ?>
  </ul>
</main>

<?php get_footer(); ?>