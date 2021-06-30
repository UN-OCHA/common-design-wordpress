<?php
/* 
Template Name: Content Template
Template Post Type: post, page
 */ ?>

<?php get_header(); ?>


<?php while ( have_posts() ) : ?>
		<!-- following common design article layout -->
		<main role="main" id="main-content" class="cd-container">
		    <div class="cd-layout-content-wrapper">
		        <div class="cd-layout-content">
		            <div class="region region-content">
						<article role="article" class="node node--type-landing node--promoted node--view-mode-full cd-article">
							<h1 class="cd-page-title"><?php the_title(); ?></h1>


							<div>
								<div class="field field--name-body field--type-text-with-summary field--label-hidden field__item">
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</article>
					</div>
		        </div>
		    </div>
		</main>
<?php endwhile; ?>



<?php get_footer(); ?>