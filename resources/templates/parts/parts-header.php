<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<header class="header">


	<?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>


	<?php get_search_form(); ?>
</header>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<div class="cd-header">
		<!-- blue upper header -->
		<div class="cd-global-header">
		

			<div class="region region-header-top cd-global-header__actions" id="cd-global-header__action">
			</div>


		</div>


		<!-- white lower header -->
		<div class="cd-container cd-site-header__inner">
			

			<div class="region region-header-logo">
					
				<a href="/" title="Home" rel="home" class="cd-site-logo">
  					<img src="../../../img/logos/OCHAlogo-01.png" alt="Common Design Demo" aria-label="Home" width="100%" height="60px">
				</a>
			</div>
		</div>


		<!-- ... -->
		<section id="cd-ocha-services" class="cd-ocha" cd-data-hidden='true'></section>
	</div>


</body>
