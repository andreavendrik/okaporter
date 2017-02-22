<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
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
