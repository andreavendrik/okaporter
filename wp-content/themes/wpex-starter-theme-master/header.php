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

<body <?php body_class(); ?>>


	<!-- mobile menu -->

	<section id="slideout-menu">
		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
		) ); ?>
	</section>

	<main class="slideout-main">

		<header class="site-header">

		<!-- menu -->
		<nav class="menu-wrapper">

			<section class="main-menu" role="navigation">
				<div id="menu-button">
					<span id="menu-line-1"></span>
					<span id="menu-line-2"></span>
					<span id="menu-line-3"></span>
				</div>
				<div id="menu-logo">
					<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home">
						<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-liggend-black.svg">
					</a>
				</div>
				<div class="menu-items">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) ); ?>
				</div>
				<div id="menu-filter-button">
					<span id="filter-line-1"></span>
					<span id="filter-line-2"></span>
					<span id="filter-line-3"></span>
					<span id="filter-line-4"></span>					
<!-- 					<svg width="20px" height="23px" viewBox="281 16 20 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<path d="M289.152091,23.6117801 L281,16 L300.565017,16 L292.412927,23.6117801 L292.412927,32.6563658 L289.152091,29.4325531 L289.152091,23.6117801 Z" id="Combined-Shape" stroke="none" fill="#363ED3" fill-rule="evenodd"></path>
					</svg> -->
				</div>				
			</section>

		</nav>

	</header>

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

//adds styling to active filter button in mobile menu

	jQuery(document).ready(function(){
		jQuery('#menu-filter-button').live('click', function(event) {
			jQuery('#filter-1').slideToggle(200,'swing');
			jQuery('#menu-filter-button').toggleClass('menu-filter-button-active'); 
			jQuery('.main-menu').toggleClass('filter-button-active');  			
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
		jQuery('#menu-button').live('click', function(event) {
			jQuery('#slideout-menu').toggleClass('slideout-menu-active');   
			jQuery('.slideout-main').toggleClass('slideout-main-active');           
			jQuery('#menu-button').toggleClass('menu-button-active');    
		  });
		});  
	// }
 </script>

