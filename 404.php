<?php
/**
 * Template that handle 404 requests on server
 *
 * @link https://developer.wordpress.org/themes/functionality/404-pages/
 */
?>

<?php get_header(); ?>

<main id="main-content" class="cd-container" aria-label="Page content">
  <h1 class="cd-page-title">
    <?php echo esc_html( 'Page not found' ); ?>
  </h1>

  <div class="cd-layout">
    <div class="cd-layout-content">
      <h2>
        <a href="<?php echo esc_attr( home_url() ); ?>">
          <?php echo esc_html( 'Homepage' ); ?>
        </a>
      </h2>
    </div>
  </div>
</main>

<?php get_footer(); ?>
