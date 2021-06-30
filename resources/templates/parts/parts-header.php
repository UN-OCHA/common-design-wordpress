<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>



<header class="cd-header">

	<!-- blue upper header -->
     <div class="cd-global-header">
  		<div class="cd-container cd-global-header__inner">
  			<div class="region region-header-top cd-global-header__actions" id="cd-global-header__actions">
			    <nav role="navigation" id="block-helpmenu" aria-labelledby="block-helpmenu-menu" class="block block-menu navigation menu--help cd-global-header__user-menu">
			  		<!-- help nav can go here -->
			    </nav>

			      <div class="language-switcher-language-url block block--language block--language-blocklanguage-interface block--languageswitcher cd-global-header__language-switcher" id="block-languageswitcher" role="navigation">
			         <!-- language changer can go here -->
			      </div>
			</div>

		    <?php get_template_part( 'resources/templates/parts/parts', 'ocha-services' ); ?>

        </div>
	</div>

	<div class="cd-site-header">
	  		<div class="cd-container cd-site-header__inner">

	  			<div class="region region-header-logo">
	  			  	 <?php the_Custom_logo(); ?>
	  			  	 <a href="/" title="Home" rel="home" class="cd-site-logo"></a>
	  			</div>




	   			<div class="cd-site-header__actions">


                    <div class="cd-site-header__nav-holder">
                        <?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>
                    </div>

    		</div>
  		</div>
    </div>

</header>




