<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="mSrQvaYYGoByiWFyFp71K0bQriCJZx-MElnKPHlFBa8" />	
	<meta name="google-site-verification" content="qBLVU7g9hf2w5xsmFxjgvQNcIwLKJb9Tw3onM_AZHlM" />	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
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
			<a href="https://www.facebook.com/gofrankme" target="_blank"><div class="social-icon" id="facebook-icon-mobile"></div></a>
			<a href="https://www.twitter.com/gofrankme" target="_blank"><div class="social-icon" id="twitter-icon-mobile"></div></a>
			<a href="https://www.instagram.com/gofrankfashion" target="_blank"><div class="social-icon" id="instagram-icon-mobile"></div></a>
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
					<div class="social-icons-desktop">
						<a href="https://www.facebook.com/gofrankme" target="_blank"><div class="social-icon" id="facebook-icon-desktop"></div></a>
						<a href="https://www.instagram.com/gofrankfashion" target="_blank"><div class="social-icon" id="instagram-icon-desktop"></div></a>
						<a href="https://www.twitter.com/gofrankme" target="_blank"><div class="social-icon" id="twitter-icon-desktop"></div></a>					
					</div>
				</div>
				<div id="filter-button-mobile">
					<svg height="13" width="30">
  						<polygon points="1,0 31,0 16,13"/>
					</svg>	
					<span id="filter-line-1"></span>
					<span id="filter-line-2"></span>
					<span id="filter-line-3"></span>
					<span id="filter-line-4"></span>				
				</div>				
			</section>

		</nav>


<script>

//adds styling and pulls out filter menu when filter button is clicked on mobile 

	jQuery(document).ready(function(){
		jQuery('.filter-button-desktop').on('click', function(event) {
			jQuery('.filter-labels').slideToggle(200,'swing');		
		});    
});

//makes filter labels sticky to top on desktop

	var getWindowY = function() { return window.pageYOffset || document.documentElement.scrollTop }

	jQuery(window).scroll(function() {
		if(getWindowY() <= 712) {
			jQuery(".filter-wrapper").removeClass('filter-wrapper-active');
			jQuery(".index-cta").removeClass('filter-bar-active');
		} 
		else {
			jQuery(".filter-wrapper").addClass('filter-wrapper-active');
			jQuery(".index-cta").addClass('filter-bar-active');

		}
	})

//adds styling to main menu on scroll

	jQuery(window).scroll(function() {     
		var scroll = jQuery(window).scrollTop();
		if (scroll > 100) {
			jQuery(".menu-wrapper").addClass("active");
		}
		else {
			jQuery(".menu-wrapper").removeClass("active");
		}
});


//adds styling and pulls out filter menu when filter button is clicked on mobile 

	jQuery(document).ready(function(){
		jQuery('#filter-button-mobile').on('click', function(event) {
			jQuery('.filter-labels').slideToggle(200,'swing');
			jQuery('#filter-button-mobile').toggleClass('filter-button-mobile-active'); 
			jQuery('#menu-filter-heading').toggleClass('menu-filter-heading-active'); 
			jQuery('.main-menu').toggleClass('filter-button-active');  	
			jQuery('#menu-logo').toggleClass('hide-menu-logo');  								
		});    
});

//adds styling to active filter button on desktop 
	jQuery(document).ready(function(){

		jQuery('.filter-labels input[checked]').each(function() {
			jQuery(this).parent().addClass('filter-labels-active');        			
		})

		jQuery('.filter-labels input').on('change', function(event) {
			if(this.checked) {
				jQuery(this).parent().addClass('filter-labels-active');  
				jQuery('.filter-button-desktop').addClass('filter-button-desktop-active');  
				jQuery('#filter-button-mobile').addClass('filter-button-mobile-blue');  					
			}
			else {
				jQuery(this).parent().removeClass('filter-labels-active');       
				jQuery('.filter-button-desktop').removeClass('filter-button-desktop-active');  	 	
				jQuery('#filter-button-mobile').removeClass('filter-button-mobile-blue');  					

			}
		  });
		});  

//slide out menu

	jQuery(document).ready(function(){
		jQuery('#menu-toggle-button').on('click', function(event) {
			jQuery('#mobile-menu-slideout-panel').toggleClass('mobile-menu-slideout-panel-active');   
			jQuery('.website-wrapper').toggleClass('website-wrapper-active');          
			jQuery('.menu-wrapper').toggleClass('menu-wrapper-slideout');           			 
			jQuery('#menu-toggle-button').toggleClass('menu-toggle-button-active');    
		  });
		});  

</script>

<!-- hide menu when scrolling down, show when scrolling up -->

<script>
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if ((st > lastScrollTop && st > navbarHeight) && ( $(".wrapper").css("max-width") >= "700px")) {
        // Scroll Down
        $('.menu-wrapper').addClass('menu-wrapper-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.menu-wrapper').removeClass('menu-wrapper-up');
        }
    }
    
    lastScrollTop = st;
}
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

<!-- Google Analytics code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91644969-1', 'auto');
  ga('send', 'pageview');

</script>

 <script type="text/javascript">
		$("#frank-brands-link").click(function() {
		$('html, body').animate({
			scrollTop: $("#frank-brands").offset().top - 150
		},1000);
		});
</script>