<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/js/slideout/dist/slideout.min.js"></script>
</head>


<!-- start of body -->

<body <?php body_class(); ?>>

	<!-- mobile menu (slide-out panel) -->

	<section id="mobile-menu-slideout-panel">
		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
		) ); ?>
		<div class="social-icons-mobile">
			<a href=""><div class="facebook"></a>
		</div>
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
						<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/gf-logo-21.svg">
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
					<div class="social-icons">
						<a href=""><div class="facebook"></div></a>
					</div>
				</div>
				<div id="filter-button-mobile">
					<svg height="13" width="30">
  						<polygon points="1,0 31,0 16,13" style="fill:black;" />
					</svg>	
					<span id="filter-line-1"></span>
					<span id="filter-line-2"></span>
					<span id="filter-line-3"></span>
					<span id="filter-line-4"></span>				
				</div>				
			</section>

		</nav>

<script>

//adds styling to main menu on scroll

	jQuery(window).scroll(function() {     
		var scroll = jQuery(window).scrollTop();
		if (scroll > 60) {
			jQuery(".menu-wrapper").addClass("active");
		}
		else {
			jQuery(".menu-wrapper").removeClass("active");
		}
});


//adds styling and pulls out filter menu when filter button is clicked on mobile 

	jQuery(document).ready(function(){
		jQuery('#filter-button-mobile').live('click', function(event) {
			jQuery('.filter-labels').slideToggle(200,'swing');
			jQuery('#filter-button-mobile').toggleClass('filter-button-mobile-active'); 
			jQuery('#menu-filter-heading').toggleClass('menu-filter-heading-active'); 
			jQuery('.main-menu').toggleClass('filter-button-active');  	
			jQuery('#menu-logo').toggleClass('hide-menu-logo');  								
		});    
});

//adds styling to active filter button on desktop 
	jQuery(document).ready(function(){
		jQuery('.filter-labels label').live('click', function(event) {
				jQuery('.filter-labels label').addClass('filter-labels-active');        			
		  });
		});  

//slide out menu

	jQuery(document).ready(function(){
		jQuery('#menu-toggle-button').live('click', function(event) {
			jQuery('#mobile-menu-slideout-panel').toggleClass('mobile-menu-slideout-panel-active');   
			jQuery('.website-wrapper').toggleClass('website-wrapper-active');          
			jQuery('.menu-wrapper').toggleClass('menu-wrapper-active');           			 
			jQuery('#menu-toggle-button').toggleClass('menu-toggle-button-active');    
		  });
		});  

</script>

<script>

	var scrollTimer = null;

	jQuery(document).ready(function(){

		jQuery(window).on('scroll', function() {
		    jQuery('.map').css("pointer-events", "none");
		    window.clearTimeout(scrollTimer);
			scrollTimer = window.setTimeout(function() {
			    jQuery('.map').css("pointer-events", "auto");
			}, 500);
		})
	
	});  
</script>
