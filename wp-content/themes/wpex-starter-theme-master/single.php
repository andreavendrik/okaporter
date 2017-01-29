<?php get_header(); ?>

<section id="main-single" class="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Header -->

			<header class="brand-header" style="background-image: url('<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image'); ?>')">
			</header>

			<main class="brand-wrapper">

				<article class="brand-introduction">

					<div class="brand-information">
						<!-- <div class="brand-tile-tag" id="brand-page-tag">
							<?php the_tags( ''); ?>
						</div>  -->         
						<div class="brand-page-title">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="brand-introduction-text">
							<?php the_content(); ?>
						</div>
					</div>

					<div class="brand-metadata">

						<div class="brand-metadata-wrapper">
							<div>
								<h4>Country of origin</h4>
								<p><?php the_field( 'country_of_origin' ) ?></p>
							</div>
							<div>
								<h4>Labels</h4>
								<p><?php the_field( 'official_labels' ) ?></p>
							</div>
							<div>
								<h4>Website</h4>
								<p><a href="<?php the_field( 'website' ) ?>" target="_blank"><?php the_field( 'website' ) ?></a></p>
							</div>
						</div>

						<div class="brand-button-wrapper">

								<form class="brand-button-form" action="<?php the_field ('webshop_url') ?>">
    								<input class="brand-button" id="button-webshop" type="submit" value="Shop online" /><span></span>
								</form>

 								<button class="brand-button" id="button-map">
									Shops on map
								</button>
							</div>
						</div>

				</article>

			<!-- Content -->

				<div class="brand-page-header"><h2>So why this brand?</h2></div>

				<article class="brand-content">

					<?php if( get_field('organic_materials') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image" id="label-sustainable">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-sustainable-mobile.svg">
							</div>
							<div class="labels-text">
								<h3>Organic materials</h3>
								<?php the_field( 'organic_materials' ) ?>
							</div>
						</div>
					<?php endif; ?>


					<?php if( get_field('fair_labour') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image" id="label-fair">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-fair-mobile.svg">
							</div>
							<div class="labels-text">
								<h3>Fair Labour</h3>
								<?php the_field( 'fair_labour' ) ?>
							</div>
						</div>
					<?php endif; ?>


					<?php if( get_field('recycling') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image" id="label-vegan">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-vegan-mobile.svg">
							</div>
							<div class="labels-text">
								<h3>Vegan</h3>
								<?php the_field( 'recycling' ) ?>
							</div>
						</div>
					<?php endif; ?>

					<?php if( get_field('vegan') ): ?>
							<div class="brand-content-labels">
								<div class="labels-image" id="label-eu">		
									<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-eu-mobile.svg">		
								</div>
							<div class="labels-text">
								<h3>Produced in the EU</h3>
								<?php the_field( 'vegan' ) ?>
							</div>
						</div>
					<?php endif; ?>

			</article>

			<?php if( get_field('brand_story') ): ?>

				<div class="brand-page-header"><h2>The full story</h2></div>

				<article class="brand-content">
						<div class="labels-text" id="brand-story">
							<?php the_field( 'brand_story' ) ?>
						</div>
					</div>
				</article>

			<?php endif; ?>

			<div class="brand-page-header"><h2>Where to buy <?php the_title(); ?></h2></div>


		</main>

		<section class="map brand-map">
			<?php the_field( 'map_code' ) ?>
		</section>

		<?php endwhile; // End of the loop. ?>

	</section><!-- #main -->

 <script type="text/javascript">
		$("#button-map").click(function() {
		$('html, body').animate({
			scrollTop: $(".brand-map").offset().top - 150
		},1000);
		});
</script>

<?php get_footer(); ?>
