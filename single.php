<?php get_header(); ?>

<main class="page-content blog">
  <div class="page-hero">
    <span class="page-hero__title">Blog</span>
  </div>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="blog-contents">
        <div class="blog-contents__item-area">
          <h1 class="blog-contents__heading"><?php the_title(); ?></h1>
          <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
            <?php echo esc_html(get_the_date()); ?>
          </time>
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', [
              'class' => 'blog-contents__img'
            ]); ?>
          <?php endif; ?>
          <div class="blog-contents__entry">
            <?php the_content(); ?>
          </div>
        </div><!-- blog-contents__item-area -->
        <nav class="blog-contents__navigation">
          <div class="blog-contents__navigation-prev">
            <?php previous_post_link('%link', '<span class="blog-contents__navigation-icon">←</span><span class="blog-contents__navigation-text">Previous</span>'); ?>
          </div>
          <a href="<?php echo esc_url( get_post_type_archive_link('post') ); ?>" class="link-button">
            Back to List
          </a>
          <div class="blog-contents__navigation-next">
            <?php next_post_link('%link', '<span class="blog-contents__navigation-text">Next</span><span class="blog-contents__navigation-icon">→</span>'); ?>
          </div>
        </nav>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>