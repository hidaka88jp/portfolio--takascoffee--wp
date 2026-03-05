<?php get_header(); ?>

<main class="page concept">

  <div class="page-hero">
    <h1 class="page-hero__title"><?php the_title(); ?></h1>
  </div>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

</main>

<?php get_footer(); ?>