<?php
/**
 * Template Name: Layout Sidebar Second
 * Layout with a sidebar after the content area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main role="main" id="main-content" class="cd-container cd-content--compact">
  <div class="cd-layout">
    <div class="cd-layout__content [ cd-flow ]">
      <?php if ( have_posts() ) : ?>
        <?php if ( is_home() && is_front_page() ) : ?>
          <?php get_template_part( 'resources/templates/content/content' ); ?>
        <?php else : ?>
          <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <?php get_template_part( 'resources/templates/content/content', get_post_type() ); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <?php if ( is_active_sidebar( 'sidebar-second' ) ) : ?>
      <aside class="cd-layout__sidebar cd-layout__sidebar--second cd-content--compact" role="complementary">
        <ul class="cd-gutenberg-blocks cd-flow">
          <?php get_sidebar( 'second' ); ?>
        </ul>
      </aside>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
