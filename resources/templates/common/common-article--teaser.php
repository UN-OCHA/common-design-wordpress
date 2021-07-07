<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<article class="cd-article cd-teaser">
    <header>
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <?php the_post_thumbnail(); ?>
    </header>

	<?php if ( the_excerpt() ) : ?>
        <div><?php the_excerpt(); ?></div>
	<?php endif; ?>
</article>
