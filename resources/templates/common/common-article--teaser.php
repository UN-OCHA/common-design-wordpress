<?php
/**
 * <article> common component that display basic information about post in loop.
 * You can manage other common components in this folder.
 */
?>

<article role="article" class="cd-teaser [ cd-flow cd-bumper ]">

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="cd-teaser__image">
      <?php the_post_thumbnail( 'thumbnail-teaser' ); ?>
    </div>
	<?php endif; ?>

    <div class="cd-teaser__container [ cd-flow ]">
      <div class="cd-teaser__title cd-max-width">
        <h3>
          <a href="<?php the_permalink(); ?>" rel="bookmark">
            <?php the_title(); ?>
          </a>
        </h3>
      </div>

      <div class="cd-teaser__description cd-max-width">
        <?php the_excerpt(); ?>
      </div>

      <a href="<?php the_permalink(); ?>" class="cd-teaser__link cd-read-more">
        Learn more
        <svg class="cd-icon cd-icon--arrow-right">
          <use xlink:href="#cd-icon--arrow-right"></use>
        </svg>
      </a>
    </div>
</article>
