<?php
/**
 * Template Name: Landing Page
 * Full width layout, to be used with Gutenberg blocks.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<?php if ( has_post_thumbnail() ) : ?>
  <div class="cd-hero cd-hero--style-one cd-bleed">
    <?php the_post_thumbnail( 'hero-image', array('class' => 'cd-hero__image') ); ?>
    <div class="cd-hero__container">
      <div class="cd-hero__title">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="cd-hero__description"></div>
    </div>
  </div>
	<?php if ( get_post(get_post_thumbnail_id())->post_excerpt ) : ?>
    <div class="cd-caption">
      <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
    </div>
	<?php endif; ?>
<?php endif; ?>

<main role="main" id="main-content" class="cd-container">
  <div class="cd-layout">
    <div class="cd-layout__content [ cd-flow ]">
      <?php get_template_part( 'resources/templates/common/common', 'article--landing' ); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
