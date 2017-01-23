<?php get_header(); ?>

<!-- Logo & tagline underneath menu -->

	<div class="index-header">

		<div class="index-header-logo">
 			<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-staand-blue-3.svg"></a>
		</div>

		<div class="index-about-text">
			This is <span>Go Frank</span>, a collection of sustainable and fair fashion brands.<br> If you are looking to make more conscious fashion choices, this is the place to start. <a href="">Read more...</a>
		</div>
	</div>

<!-- Wrapper around content of index -->

<section class="content-wrapper">

	<!-- Filter brands functionality -->

	<div class="filter-section">
			<div class="filter-dropdown" id="filter-labels">
				<?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
			</div>
	</div>

	<!-- Brands tiles -->

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="brand-tile">

				<a href="<?php the_permalink() ?>">
					<!-- Brand thumbnail -->
					<div class="brand-tile-thumbnail">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}?>
					<!-- Brand tag -->
						<div class="brand-tile-tag">
							<?php the_tags( ''); ?>
						</div>

					<!-- Brand labels -->					
						<div class="brand-thumbnail-labels-section">
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('organic_cotton_label', $thumbnail_labels) ): ?>
								
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-sustainable-wit.svg">
										<p>Organic materials</p>
									</div>
								</div>
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-fair-wit.svg">
										<p>Fair labour</p>
									</div>							
								</div>
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('recycling_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">							
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-vegan-wit.svg">
										<p>Vegan production</p>
									</div>							
								</div> 
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">												
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-eu-wit.svg">
										<p>Produced in EU</p>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<!-- Brand title -->
					<header class="brand-tile-header">
						<?php the_title( sprintf(
						'<h2 class="brand-tile-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
						'</a></h2>'
					); ?>
					</header>
				</a>
			</div>

		<?php endwhile; ?>

		<!-- Tile calling out for other brands -->

		<div class="brand-tile">
			<a href="<?php echo esc_url( home_url( '/about#brand-application-section' ) );?>">
				<div class="brand-application">
					<p>Your brand here?</p>
					<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icon-plus-black.svg" border=0>
				</div>
			</a>
		</div>

	<?php else : ?>

		<div class="no-filter-results">
			Snap! No brands match your search. 
		</div>

	<?php endif; ?>

</div>

</section>

<?php get_footer(); ?>
