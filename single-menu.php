<?php get_header(); ?>

<main class="page-content menu">
  <div class="page-hero">
    <?php esc_html_e('Menu', 'takascoffee'); ?>
  </div>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="menu-contents">
        <div class="menu-contents__items">
          <h2 class="menu-contents__heading"><?php the_title(); ?></h2>
          <div class="menu-contents__item-area">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', [
                'class' => 'menu-contents__item-img'
              ]); ?>
            <?php endif; ?>
            <div class="menu-contents__about-item">
              <div class="menu-contents__item-text">
                <?php the_content(); ?>
              </div>
              <p class="menu-contents__item-price">$<?php echo esc_html( get_field('price') ); ?></p>
            </div><!-- menu-contents__about-item -->
          </div><!-- menu-contents__item-area -->
        </div><!-- menu-contents__items -->

        <?php
          $recommended_items = get_field('recommended_items');
          if ($recommended_items) :
        ?>
          <section class="menu-contents__recommended">
            <h2 class="menu-contents__heading">RECOMMENDED</h2>
            <ul class="menu-contents__item-list">
              <?php foreach ($recommended_items as $recommended_post) : ?>
                <li class="menu-contents__item">
                  <a href="<?php echo esc_url(get_permalink($recommended_post)); ?>" class="menu-contents__link">
                    <?php echo get_the_post_thumbnail($recommended_post->ID, 'medium'); ?>
                    <dl class="menu-contents__item-desc">
                      <dt class="menu-contents__item-name"><?php echo esc_html( get_the_title($recommended_post) ); ?></dt>
                      <dd class="menu-contents__item-sentence">
                        <?php echo esc_html( get_the_excerpt($recommended_post) ); ?>
                      </dd>
                    </dl>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </section>
        <?php endif; ?>
        <div class="menu-contents__link-button-area">
          <a href="<?php echo esc_url( get_post_type_archive_link('menu') ); ?>" class="link-button">
            Back to Menu
          </a>
        </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>