<?php
/**
 * <article> common component that display basic information about post in loop. You can manage other commons components in this folder.
 */
?>

<article class="cd-article">

    <?php
    /**
    * Debug: Display Post Blocks
    *
    */
    function cd_display_post_blocks() {
    global $post;
    print_r( esc_html( $post->post_content ) );
    }
    add_action( 'wp_footer', 'cd_display_post_blocks' );
    ?>

    <header>
        <h1 class="cd-page-title"><?php the_title(); ?></h1>

		<?php the_post_thumbnail(); ?>
    </header>

    <?php the_content(); ?>

</article>
