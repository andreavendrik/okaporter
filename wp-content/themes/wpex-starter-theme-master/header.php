<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">\
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<!-- menu -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a href="<?php echo esc_url( home_url( '/category/mens-wear,womens-wear,bags,accessories,shoes/' ) ); ?>" rel="home">

					<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-liggend-black.svg">

				</a>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) ); ?>

			</nav>

		<?php endif; ?>

	</header>

<script>
	jQuery(window).scroll(function() {     
	    var scroll = jQuery(window).scrollTop();
	    if (scroll > 30) {
	        jQuery(".main-navigation").addClass("active");
	    }
	    else {
	        jQuery(".main-navigation").removeClass("active");
	    }
});
</script>