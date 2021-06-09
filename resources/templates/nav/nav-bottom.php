<?php
/**
 * Bottom nav menu content goes here. Customize it to your needs. How to do it? Read link below :)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

		<nav role="navigation"
			 id="block-footer"
			 >
			 <h2 id="block-footer-menu">Footer</h2>
			  <ul>
		          <li>
		             <a href="https://www.un.org/en/about-us/privacy-notice">Privacy</a>
		          </li>
		          <li>
		             <a href="https://www.un.org/en/about-us/terms-of-use">Terms of use</a>
		          </li>
		          <!-- does the menu array need to be inside the li? -->
		          <li>
		          	  <!-- do i need walker for this footer menu of Privacy, Terms, Contact and About -->
		             <?php
						wp_nav_menu( array(
						'theme_location' => 'bottom',
						'container'     => 'ul',
						'link_before' => '<span>',
			            'link_after' => '</span>',
						'walker' => new cd_MainNav_Walker() 
						) );
					?>
		          </li>

		    </ul>

			

		</nav>




             
               
