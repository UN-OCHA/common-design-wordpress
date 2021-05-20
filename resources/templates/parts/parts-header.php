<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

	<!-- <?php get_template_part( 'resources/templates/nav/nav', 'top' ); ?>
	-->



<header class="cd-header">

	



	

	<!-- blue upper header -->
     <div class="cd-global-header">
  		<div class="cd-container cd-global-header__inner">
  			  <div class="region region-header-top cd-global-header__actions" id="cd-global-header__actions">
			      <nav role="navigation" id="block-useraccountmenu" aria-labelledby="block-useraccountmenu-menu" class="block block-menu navigation menu--account cd-global-header__user-menu">
			        <h2 id="block-useraccountmenu-menu">User account menu</h2>
			        <ul class="menu">
			           <li class="menu-item">
			              <a href="/user/login/hid" id="cd-user-menu-item-0-1"><svg class="cd-icon cd-icon--user" aria-hidden="true" focusable="false" width="16" height="16">
			                <use xlink:href="#cd-icon--user"></use>
			                </svg><span>Log in</span>
			              </a>        
			          </li>
			        </ul>
			     </nav>

			    <nav role="navigation" id="block-helpmenu" aria-labelledby="block-helpmenu-menu" class="block block-menu navigation menu--help cd-global-header__user-menu">
			    <h2 id="block-helpmenu-menu">Help menu</h2>
			        <ul class="menu">
			          <li class="menu-item menu-item--expanded">
			            <button type="button" id="cd-help-menu-0-1-toggler" class="cd-help-menu__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-help-menu-0-1"><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--help cd-help-menu__logo"><use xlink:href="#cd-icon--help"></use></svg><span class="visually-hidden cd-help-menu__btn-label">Help menu</span><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-help-menu__icon"><use xlink:href="#cd-icon--arrow-down"></use></svg></button>
			            <ul data-cd-toggable="Help menu" data-cd-icon="arrow-down" data-cd-component="cd-help-menu" id="cd-help-menu-0-1" data-cd-logo="help" data-cd-logo-only="" class="menu cd-global-header__dropdown cd-user-menu__dropdown" data-cd-hidden="true" data-cd-processed="true">
			                <li class="menu-item">
			                  <a href="/node/1" id="cd-help-menu-item-1-1"><span>Menu item one</span></a> 
			                </li>
			                <li class="menu-item">
			                  <a href="/node/2" id="cd-help-menu-item-1-2"><span>Menu item two</span></a>
			                </li>
			            </ul>
			          </li>
			        </ul>
			    </nav>

			      <div class="language-switcher-language-url block block--language block--language-blocklanguage-interface block--languageswitcher cd-global-header__language-switcher" id="block-languageswitcher" role="navigation">
			          <button type="button" id="cd-language-toggler" class="cd-language-switcher__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-language"><span class="cd-language-switcher__btn-label">en</span><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-language-switcher__icon"><use xlink:href="#cd-icon--arrow-down"></use></svg></button>
			          <div class="cd-language-switcher cd-dropdown" id="cd-language" aria-labelledby="cd-language-switcher" data-cd-toggable="en" data-cd-icon="arrow-down" data-cd-component="cd-language-switcher" data-cd-hidden="true" data-cd-processed="true">
			            <h2 id="cd-language-switcher">Language switcher</h2>
			            <ul class="links cd-global-header__dropdown cd-user-menu__dropdown"><li hreflang="en" data-drupal-link-system-path="<front>" class="en is-active"><a href="/" class="language-link is-active" hreflang="en" data-drupal-link-system-path="<front>">English</a></li><li hreflang="fr" data-drupal-link-system-path="<front>" class="fr"><a href="/fr" class="language-link" hreflang="fr" data-drupal-link-system-path="<front>">Français</a></li><li hreflang="es" data-drupal-link-system-path="<front>" class="es"><a href="/es" class="language-link" hreflang="es" data-drupal-link-system-path="<front>">Español</a></li><li hreflang="ar" data-drupal-link-system-path="<front>" class="ar"><a href="/ar" class="language-link" hreflang="ar" data-drupal-link-system-path="<front>">Arabic</a></li></ul>
			          </div>
			      </div>
			  </div>

			  <section id="cd-ocha-services" class="cd-ocha" cd-data-hidden="true">
			     <button type="button" id="cd-ocha-dropdown-toggler" class="cd-ocha__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-ocha-dropdown"><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--ocha-logo cd-ocha__logo"><use xlink:href="#cd-icon--ocha-logo"></use></svg><span class="cd-ocha__btn-label">OCHA Services</span>
			     	<svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-ocha__icon">
			     		<use xlink:href="#cd-icon--arrow-down">
			     			<!-- Connect svg element to new file? 
			     			<?php get_template_icon( 'resources/templates/nav/nav', 'top' ); ?>
			     			-->
			     		</use>
			     	</svg>
			     </button>

			     <div class="cd-global-header__dropdown cd-ocha-dropdown cd-dropdown" id="cd-ocha-dropdown" aria-labelledby="cd-ocha-services-title" data-cd-toggable="OCHA Services" data-cd-icon="arrow-down" data-cd-logo="ocha-logo" data-cd-component="cd-ocha" data-cd-hidden="true" data-cd-processed="true">

			      <div class="cd-ocha-dropdown__inner">
			        <div class="cd-ocha-dropdown__section">
			          <p class="cd-ocha-dropdown__heading">Related Platforms</p>
			          <ul class="cd-ocha-dropdown__list">
			                      <li class="cd-ocha-dropdown__link"><a href="https://example.com">Customizable</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://example.com">Customizable</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://example.com">Customizable</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://example.com">Customizable</a></li>
			                    </ul>
			        </div>
			        <div class="cd-ocha-dropdown__section">
			          <p class="cd-ocha-dropdown__heading">Other OCHA Services</p>
			          <ul class="cd-ocha-dropdown__list">
			                      <li class="cd-ocha-dropdown__link"><a href="https://fts.unocha.org/">Financial Tracking Service</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://data.humdata.org/">Humanitarian Data Exchange</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://humanitarian.id/">Humanitarian ID</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://humanitarianresponse.info/">Humanitarian Response</a></li>
			                    </ul>
			        </div>
			        <div class="cd-ocha-dropdown__section">
			          <p class="cd-ocha-dropdown__heading" aria-hidden="true">&nbsp;</p>
			          <ul class="cd-ocha-dropdown__list">
			                      <li class="cd-ocha-dropdown__link"><a href="https://interagencystandingcommittee.org">Inter-Agency Standing Committee</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://unocha.org/">OCHA website</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://reliefweb.int/">ReliefWeb</a></li>
			            <li class="cd-ocha-dropdown__link"><a href="https://vosocc.unocha.org/">Virtual OSOCC</a></li>
			                    </ul>
			        </div>
			        <div class="cd-ocha-dropdown__section">
			          <a class="cd-button cd-button--light cd-button--bold cd-button--uppercase cd-ocha-dropdown__see-all" href="https://www.unocha.org/ocha-digital-services" target="_blank" rel="noopener">See all</a>
			        </div>
			      </div>
			    </div>
			  </section>
			</div>
  		</div>
	</div>



<!-- white lower header -->
	<div class="cd-site-header">
	  		<div class="cd-container cd-site-header__inner">

	    		<!-- blue ocha logo-->
	  			<div class="region region-header-logo">
	  			  	<a href="/" title="Home" rel="home" class="cd-site-logo">
	  			  		 <img width="100%" height="60px" <?php the_Custom_logo(); ?></img>
	  					<!-- <img src="/themes/contrib/common_design/img/logos/ocha-lockup-blue.svg" alt="Common Design Demo" aria-label="Home" width="100%" height="60px"> -->

	  						<!-- question : do I need to wrap the custom logo php in img? Also I don't know why if I don't use </img> it shows the last php angle bracket -->


					</a>


					<svg viewBox="0 0 48 48" id="cd-icon--arrow-down" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><path d="M48 14a4 4 0 01-1.17 2.83l-20 20a4 4 0 01-5.66 0l-20-20a4 4 0 015.66-5.66L24 28.34l17.17-17.17A4 4 0 0148 14z"></path></svg>
	  			</div>


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
						<nav role="navigation" id="block-mainnavigation" aria-labelledby="block-mainnavigation-menu" data-cd-toggable="Menu" data-cd-component="cd-nav" data-cd-icon="arrow-down" class="block block-menu navigation menu--main cd-nav cd-site-header__nav" data-cd-processed="true">
	  						<h2 id="block-mainnavigation-menu">Main navigation</h2>
							<ul class="menu">
						    	<li class="menu-item">
									<a href="/demo" id="cd-main-menu-item-0-1"><span>Common design demo</span></a>
						    	</li>
	     						<li class="menu-item">
									<a href="/svg-icon-library" id="cd-main-menu-item-0-2"><span>Icons</span></a>
								</li>
								<li class="menu-item">
									<a href="https://brand.unocha.org" id="cd-main-menu-item-0-3"><span>Brand guidelines</span></a>
								</li>
	 							<li class="menu-item menu-item--expanded">
	    							<button type="button" id="cd-main-menu-0-4-toggler" class="cd-main-menu__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-main-menu-0-4"><span class="cd-main-menu__btn-label">Layouts</span><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-main-menu__icon"><use xlink:href="#cd-icon--arrow-down"></use></svg></button>
	    							<ul data-cd-toggable="Layouts" data-cd-icon="arrow-down" data-cd-component="cd-main-menu" id="cd-main-menu-0-4" class="menu cd-main-menu__dropdown" data-cd-hidden="true" data-cd-processed="true">
								        <li class="menu-item">
											<a href="/node/1" id="cd-main-menu-item-1-1"><span>First sidebar</span></a>
								    	</li>
								      	<li class="menu-item">
								            <a href="/node/2" id="cd-main-menu-item-1-2"><span>Second sidebar</span></a>
								    	</li>
									    <li class="menu-item">
											<a href="/node/3" id="cd-main-menu-item-1-3"><span>Both sidebars</span></a>
									    </li>
									</ul>
								</li>
	      						<li class="menu-item menu-item--expanded">
	      							<button type="button" id="cd-main-menu-0-5-toggler" class="cd-main-menu__btn" data-cd-toggler="" aria-expanded="false" aria-haspopup="true" aria-controls="cd-main-menu-0-5"><span class="cd-main-menu__btn-label">Views List</span><svg width="16" height="16" aria-hidden="true" focusable="false" class="cd-icon cd-icon--arrow-down cd-main-menu__icon"><use xlink:href="#cd-icon--arrow-down"></use></svg></button>
	      							<ul data-cd-toggable="Views List" data-cd-icon="arrow-down" data-cd-component="cd-main-menu" id="cd-main-menu-0-5" class="menu cd-main-menu__dropdown" data-cd-hidden="true" data-cd-processed="true">
	      								<li class="menu-item">
	      									<a href="/teaser-list" id="cd-main-menu-item-1-1"><span>Teaser List</span></a>
	      								</li>
									    <li class="menu-item">
											<a href="/card-list" id="cd-main-menu-item-1-2"><span>Card List</span></a>
									    </li>    
									    <li class="menu-item">
											<a href="/facets" id="cd-main-menu-item-1-3"><span>List with facets</span></a>
									    </li>

	       							</ul>
	       						</li>
	       					 </ul>
						</nav>
					</div>

    		</div>
  		</div> 
  
</header>




