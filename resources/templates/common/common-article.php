<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<article class="cd-article">

    <header>
        <h1 class="cd-page-title"><?php the_title(); ?></h1>
    </header>

	<?php if ( has_post_thumbnail() ) : ?>
    <div class="cd-banner">
	    <?php the_post_thumbnail( 'banner-image', array('class' => 'cd-banner__image') ); ?>
    </div>
	<?php endif; ?>

    <?php the_content(); ?>

</article>
