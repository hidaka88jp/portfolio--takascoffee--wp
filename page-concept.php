<?php get_header(); ?>

<main class="page-content concept">
  <div class="page-hero">
    <h1 class="page-hero__title"><?php the_title(); ?></h1>
  </div>

  <?php
    if (function_exists('get_field')) {
      $title1 = get_field('section1_title');
      $text1 = get_field('section1_text');
      $image1 = get_field('section1_image');

      $title2 = get_field('section2_title');
      $text2 = get_field('section2_text');
      $image2 = get_field('section2_image');
    } else {
      $title1 = $text1 = $image1 = '';
      $title2 = $text2 = $image2 = '';
    }
  ?>

  <section class="concept-section">
    <div class="concept-section__item">
      <div class="concept-section__text-area">
        <?php if ($title1): ?>
          <h2 class="concept-section__subtitle">
            <?php echo esc_html($title1); ?>
          </h2>
        <?php endif; ?>
        <?php if ($text1): ?>
          <p class="concept-section__desc">
            <?php echo nl2br(esc_html($text1)); ?>
          </p>
        <?php endif; ?>
      </div>
      <?php if ($image1): ?>
        <img
          src="<?php echo esc_url($image1['url']); ?>"
          alt="<?php echo esc_attr($image1['alt'] ?: $title1); ?>"
          class="concept-section__image"
        >
      <?php endif; ?>
    </div>
    <div class="concept-section__item concept-section__item--reverse">
      <div class="concept-section__text-area">
        <?php if ($title2): ?>
          <h2 class="concept-section__subtitle">
            <?php echo esc_html($title2); ?>
          </h2>
        <?php endif; ?>
        <?php if ($text2): ?>
          <p class="concept-section__desc">
            <?php echo nl2br(esc_html($text2)); ?>
          </p>
        <?php endif; ?>
      </div>
      <?php if ($image2): ?>
        <img
          src="<?php echo esc_url($image2['url']); ?>"
          alt="<?php echo esc_attr($image2['alt'] ?: $title2); ?>"
          class="concept-section__image"
        >
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>