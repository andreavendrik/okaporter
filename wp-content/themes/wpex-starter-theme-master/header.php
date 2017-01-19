<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>	
	<?php wp_head(); ?>
</head>

<!-- start of body -->

<body <?php body_class(); ?>>


	<!-- mobile menu (slide-out panel) -->

	<section id="mobile-menu-slideout-panel">
		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
		) ); ?>
	</section>

<!-- div wrapping entire website -->

	<main class="website-wrapper">

		<!-- menu -->

		<nav class="menu-wrapper">

			<section class="main-menu" role="navigation">
				<div id="menu-toggle-button">
					<span id="menu-line-1"></span>
					<span id="menu-line-2"></span>
					<span id="menu-line-3"></span>
				</div>
				<div id="menu-logo">
					<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home">
						<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-liggend-black.svg">
					</a>
				</div>
				<div id="menu-filter-heading">
					Filter brands
				</div>
				<div class="menu-items">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
				</div>
				<div id="menu-filter-button">
					<svg height="29" width="28">
  				<polygon points="3,0 28,0 16,13" style="fill:black;" />
					</svg>	
					<span id="filter-line-1"></span>
					<span id="filter-line-2"></span>
					<span id="filter-line-3"></span>
					<span id="filter-line-4"></span>				
				</div>				
			</section>

		</nav>

<script>

//add class to main menu

	jQuery(window).scroll(function() {     
		var scroll = jQuery(window).scrollTop();
		if (scroll > 30) {
			jQuery(".main-menu").addClass("active");
		}
		else {
			jQuery(".main-menu").removeClass("active");
		}
});

//adds styling when filter button is clicked on mobile

	jQuery(document).ready(function(){
		jQuery('#menu-filter-button').live('click', function(event) {
			jQuery('#filter-labels').slideToggle(200,'swing');
			jQuery('#menu-filter-button').toggleClass('menu-filter-button-active'); 
			jQuery('#menu-filter-heading').toggleClass('menu-filter-heading-active'); 
			jQuery('.main-menu').toggleClass('filter-button-active');  	
			jQuery('#menu-logo').toggleClass('hide-menu-logo');  								
		});    
});

//adds styling to active filter button on desktop version
	jQuery(document).ready(function(){
		jQuery('.filter-dropdown label').live('click', function(event) {
				jQuery('.filter-dropdown label').addClass('filter-dropdown-active');        			        
		  });
		});  

//slide out menu

	jQuery(document).ready(function(){
		jQuery('#menu-toggle-button').live('click', function(event) {
			jQuery('#mobile-menu-slideout-panel').toggleClass('mobile-menu-slideout-panel-active');   
			jQuery('.website-wrapper').toggleClass('website-wrapper-active');           
			jQuery('#menu-toggle-button').toggleClass('menu-toggle-button-active');    
		  });
		});  
	// }
 </script>

