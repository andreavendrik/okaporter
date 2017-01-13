<?php?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>

			<!-- menu -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a href="<?php echo esc_url( home_url( '/category/mens-wear,womens-wear,bags,accessories,shoes/' ) ); ?>" rel="home">

					<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/gf_thumbnail.svg">

				</a>
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) ); ?>

			</nav>

		<?php endif; ?>

		<!-- Logo & tagline underneath menu -->

			<div class="site-title">
				<div class="site-title-logo">
					<a href="<?php echo esc_url( home_url( '/category/mens-wear,womens-wear,bags,accessories,shoes/' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/gf_staand_black.svg"></a>
				</div>
			</div>

	</header>
