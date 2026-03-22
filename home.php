<?php get_header(); ?>

<main class="page-content blog">
  <div class="page-hero">
    <h1 class="page-hero__title"><?php esc_html_e('Blog', 'takascoffee'); ?></h1>
  </div>

  <section class="blog-section">
    <?php if ( have_posts() ) : ?>
      <ul class="blog-list">
        <?php while ( have_posts() ) : the_post(); ?>
          <li class="blog-list__item">
            <article>
              <a href="<?php echo esc_url( get_permalink() ); ?>" class="blog-list__link">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('medium', [
                    'class' => 'blog-list__image',
                    'sizes' => '(min-width: 640px) 360px, 100vw'
                  ]); ?>
                <?php endif; ?>
                <div class="blog-list__desc">
                  <h2 class="blog-list__title"><?php the_title(); ?></h2>
                  <div class="blog-list__sentence"><?php the_excerpt(); ?></div>
                </div>
              </a>
            </article>
          </li>
        <?php endwhile; ?>
      </ul>
      <div class="blog-section__pagination">
        <?php
          the_posts_pagination([
            'mid_size' => 1,
            'prev_text' => 'Prev',
            'next_text' => 'Next'
          ]);
        ?>
      </div>
    <?php else : ?>
      <p>No content found.</p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>