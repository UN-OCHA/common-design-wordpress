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

<!-- white lower header -->
	<div class="cd-site-header">
	  		<div class="cd-container cd-site-header__inner">

	    		<!-- blue ocha logo-->
	  			<div class="region region-header-logo">
	  			  	<!-- <a href="/" title="Home" rel="home" class="cd-site-logo"> -->
	  			  	 <?php the_Custom_logo(); ?>


	  						<!-- question : do I need to wrap the custom logo php in img? Also I don't know why if I don't use </img> it shows the last php angle bracket -->
					<!-- </a> -->
	  			</div>

	  	<!-- menu connected for wp found in nav-top.php -->



	  			<!-- menu options container-->
	   			<div class="cd-site-header__actions">
	   				<!-- menu options search-->
	   				<!-- -->
	        		<div class="cd-search">
						<button type="button" id="block-searchform-toggler" class="cd-search__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="block-searchform">
							<svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--search cd-search__logo">
								<use xlink:href="#cd-icon--search"></use>
							</svg>
							<span class="cd-search__btn-label">Search</span>
						</button>
						<div class="search-block-form cd-search__form block block-search" data-drupal-selector="search-block-form" aria-labelledby="cd-search-form" data-cd-toggable="Search" data-cd-component="cd-search" data-cd-logo="search" data-cd-focus-target="cd-search" id="block-searchform" role="search" data-cd-hidden="true" data-cd-processed="true">
	      					<h2 class="visually-hidden" id="cd-search-form">Search form</h2>
	      					<!-- add php for search form -->
	  						<?php get_search_form(); ?>
							<form action="/search/node" method="get" id="search-block-form" accept-charset="UTF-8" class="cd-flow">
		  						<div class="js-form-item form-item js-form-type-search form-item-keys js-form-item-keys form-no-label cd-form__item">
		      						<label for="edit-keys" class="visually-hidden">Search</label>
		        						<input title="Enter the terms you wish to search for." placeholder="What are you looking for?" class="cd-search__input form-search" id="cd-search" autocomplete="off" data-drupal-selector="edit-keys" type="search" name="keys" value="" size="15" maxlength="128">
		        				</div>
								<div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
									<button data-twig-suggestion="search_submit" class="cd-search__submit button js-form-submit form-submit" value="Search" data-drupal-selector="edit-submit" type="submit" id="edit-submit">
		  								<svg class="cd-icon cd-icon--search" width="16" height="16">
		    								<use xlink:href="#cd-icon--search"></use>
		  								</svg>
		  								<span class="visually-hidden">Search</span>
									</button>
								</div>
							</form>
	  					</div>
	  				</div>

					<div class="cd-site-header__nav-holder">
						<?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>


<!--						<nav role="navigation" id="block-mainnavigation" aria-labelledby="block-mainnavigation-menu" data-cd-toggable="Menu" data-cd-component="cd-nav" data-cd-icon="arrow-down" class="block block-menu navigation menu--main cd-nav cd-site-header__nav" data-cd-processed="true">-->
<!--	  						<h2 id="block-mainnavigation-menu">Main navigation</h2>-->
<!--							<ul class="menu">-->
<!--						    	<li class="menu-item">-->
<!--									<a href="/demo" id="cd-main-menu-item-0-1"><span>Common design demo</span></a>-->
<!--						    	</li>-->
<!--	     						<li class="menu-item">-->
<!--									<a href="/svg-icon-library" id="cd-main-menu-item-0-2"><span>Icons</span></a>-->
<!--								</li>-->
<!--								<li class="menu-item">-->
<!--									<a href="https://brand.unocha.org" id="cd-main-menu-item-0-3"><span>Brand guidelines</span></a>-->
<!--								</li>-->
<!--	 							<li class="menu-item menu-item--expanded">-->
<!--	    							<button type="button" id="cd-main-menu-0-4-toggler" class="cd-main-menu__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-main-menu-0-4"><span class="cd-main-menu__btn-label">Layouts</span><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-main-menu__icon"><use xlink:href="#cd-icon--arrow-down"></use></svg></button>-->
<!--	    							<ul data-cd-toggable="Layouts" data-cd-icon="arrow-down" data-cd-component="cd-main-menu" id="cd-main-menu-0-4" class="menu cd-main-menu__dropdown" data-cd-hidden="true" data-cd-processed="true">-->
<!--								        <li class="menu-item">-->
<!--											<a href="/node/1" id="cd-main-menu-item-1-1"><span>First sidebar</span></a>-->
<!--								    	</li>-->
<!--								      	<li class="menu-item">-->
<!--								            <a href="/node/2" id="cd-main-menu-item-1-2"><span>Second sidebar</span></a>-->
<!--								    	</li>-->
<!--									    <li class="menu-item">-->
<!--											<a href="/node/3" id="cd-main-menu-item-1-3"><span>Both sidebars</span></a>-->
<!--									    </li>-->
<!--									</ul>-->
<!--								</li>-->
<!--	      						<li class="menu-item menu-item--expanded">-->
<!--	      							<button type="button" id="cd-main-menu-0-5-toggler" class="cd-main-menu__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-main-menu-0-5"><span class="cd-main-menu__btn-label">Views List</span><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-main-menu__icon"><use xlink:href="#cd-icon--arrow-down"></use></svg></button>-->
<!--	      							<ul data-cd-toggable="Views List" data-cd-icon="arrow-down" data-cd-component="cd-main-menu" id="cd-main-menu-0-5" class="menu cd-main-menu__dropdown" data-cd-hidden="true" data-cd-processed="true">-->
<!--	      								<li class="menu-item">-->
<!--	      									<a href="/teaser-list" id="cd-main-menu-item-1-1"><span>Teaser List</span></a>-->
<!--	      								</li>-->
<!--									    <li class="menu-item">-->
<!--											<a href="/card-list" id="cd-main-menu-item-1-2"><span>Card List</span></a>-->
<!--									    </li>-->
<!--									    <li class="menu-item">-->
<!--											<a href="/facets" id="cd-main-menu-item-1-3"><span>List with facets</span></a>-->
<!--									    </li>-->
<!---->
<!--	       							</ul>-->
<!--	       						</li>-->
<!--	       					 </ul>-->
<!--						</nav>-->
					</div>

    		</div>
  		</div>
    </div>

</header>




