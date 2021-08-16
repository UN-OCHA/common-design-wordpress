<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<article class="cd-article">

	<?php if ( is_front_page() ) : ?>
        <header>
            <h1 class="cd-page-title visually-hidden"><?php the_title(); ?></h1>
        </header>
	<?php else : ?>
        <header>
            <h1 class="cd-page-title"><?php the_title(); ?></h1>
        </header>
	<?php endif; ?>

    <?php if ( !is_page_template('layout-landing-page.php')) : ?>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="cd-banner">
                <?php the_post_thumbnail( 'banner-image', array('class' => 'cd-banner__image') ); ?>
            </div>
            <?php if ( get_post(get_post_thumbnail_id())->post_excerpt ) : ?>
                <div class="cd-caption">
                    <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
                </div>
            <?php endif; ?>
	    <?php endif; ?>
    <?php endif; ?>

    <?php the_content(); ?>

</article>
