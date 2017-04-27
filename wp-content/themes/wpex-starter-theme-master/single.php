<?php get_header(); ?>

<section id="main-single" class="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- header image -->

			<header class="brand-header" style="background-image: url('<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image'); ?>')">
			</header>

			<main class="brand-wrapper">

			<!-- brand introduction -->

				<article class="brand-introduction">

					<div class="brand-information">      
						<div class="brand-page-title">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="brand-introduction-text">
							<?php the_content(); ?>
						</div>
						<?php if( get_field('photographer') ): ?>
							<div class="brand-photographer-credits">
							Photography by&nbsp;<?php the_field( 'photographer' ); ?>
							</div>
						<?php endif; ?>
					</div>

			<!-- brand basic information -->					

					<div class="brand-metadata">

						<div class="brand-metadata-wrapper">
							<div>
								<h4>Country of origin</h4>
								<p><?php the_field( 'country_of_origin' ); ?></p>
							</div>
							<div>
								<h4>Founder</h4>
								<p><?php the_field( 'founder' ); ?></p>
							</div>
							<div>
								<h4>Collection</h4>
								<p><?php the_field( 'collection' ); ?></p>
							</div>							
							<div>
								<h4>Website</h4>
								<p><a href="<?php the_field( 'website' ); ?>" target="_blank"><?php the_field( 'website' ); ?></a></p>
							</div>
						</div>

			<!-- shop buttons -->

						<div class="brand-button-wrapper">
							<a
								class="brand-button" 
								id="button-webshop" 
								href="<?php the_field ('webshop_url') ?>" 
								target="_blank"
								onclick="ga('send', 'event', 'button', 'website button');">
									Shop online
							</a>
							<a
								class="brand-button" 
								id="button-map" 
							>
									Shops on map
							</a>
						</div>
					</div>

				</article>

			<!-- brand information -->

				<div class="brand-page-header"><h2>So why this brand?</h2></div>

				<article class="brand-content">

					<?php if( get_field('green_production') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image" id="label-sustainable">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-sustainable-mobile.svg">
							</div>
							<div class="labels-text">
							<?php if( get_field('sustainable_production') ): ?>
								<h3>Green production</h3>
								<?php the_field( 'sustainable_production' ); ?>
							<?php endif; ?>								
							<?php if( get_field('sustainable_materials') ): ?>
								<h3>Sustainable materials</h3>
								<?php the_field( 'sustainable_materials' ); ?>
							<?php endif; ?>								
							</div>
						</div>
					<?php endif; ?>		


					<?php if( get_field('fair_labour') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image" id="label-fair">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-fair-mobile.svg">
							</div>
							<div class="labels-text">
								<h3>Fair labour</h3>
								<?php the_field( 'fair_labour' ); ?>
							</div>
						</div>
					<?php endif; ?>


					<?php if( get_field('vegan') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image" id="label-vegan">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-vegan-mobile.svg">
							</div>
							<div class="labels-text">
								<h3>Vegan</h3>
								<?php the_field( 'vegan' ); ?>
							</div>
						</div>
					<?php endif; ?>

					<?php if( get_field('produced_in_eu') ): ?>
							<div class="brand-content-labels">
								<div class="labels-image" id="label-eu">		
									<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-eu-mobile.svg">		
								</div>
							<div class="labels-text">
								<h3>Produced in the EU</h3>
								<?php the_field( 'produced_in_eu' ); ?>
							</div>
						</div>
					<?php endif; ?>

			</article>

		<!-- optional collection images -->

			<?php if( get_field('collection_images') ): ?>

				<div class="brand-page-header"><h2>The collection</h2></div>

					<?php the_field( 'collection_images' ) ?>

			<?php endif; ?>


		<!-- brand map -->

		<?php if( get_field('map_code') ): ?>
			<div class="brand-page-header"><h2>Where to buy <?php the_title(); ?></h2></div>
		<?php endif; ?>

		</main>


		<?php if( get_field('map_code') ): ?>
			<section class="map brand-map">
				<?php the_field( 'map_code' ) ?>
			</section>
		<?php endif; ?>

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
