<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<header class="cd-header" aria-label="Site header">
  <div class="cd-global-header">
    <div class="cd-container cd-global-header__inner">
      <div class="region region-header-top cd-global-header__actions" id="cd-global-header__actions">
        <!-- language switcher goes here -->
      </div>

      <?php get_template_part( 'resources/templates/parts/parts', 'ocha-services' ); ?>
    </div>
  </div>

  <div class="cd-site-header">
    <div class="cd-container cd-site-header__inner">

      <div class="region region-header-logo">
        <?php the_custom_logo(); ?>
      </div>

      <div class="cd-site-header__actions">
        <!-- Comment out this include if there is no search requirement -->
        <?php get_template_part( 'resources/templates/parts/parts', 'search' ); ?>

        <div class="cd-site-header__nav-holder">
          <?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>
        </div>
      </div>
    </div>
  </div>
</header>




