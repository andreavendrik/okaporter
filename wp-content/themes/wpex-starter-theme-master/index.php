<?php get_header(); ?>

<!-- Logo & tagline underneath menu -->

<section class="index-header" id="index-header-id">

	<div class="index-header-swash">
		<img src="../../../wp-content/themes/wpex-starter-theme-master/images/index-swash-2.png">
	</div>

	<div class="index-header-tagline">
			Tired of fast fashion?<br>
			Go Frank!
	</div>

	<div class="index-header-text">
		Hiya, welcome to Go Frank. Going frank is about recognising the impact of fast fashion on people and planet, and committing to making better fashion choices onwards. 
		This is not easy, so we are here to help. 
		We <a id="frank-brands-link">introduce you to frank brands</a>, <a href="<?php echo get_bloginfo('siteurl');?>/shops">show where you to find them</a>, and invite you to <a href="<?php echo get_bloginfo('siteurl');?>/about">join the movement</a>!
	</div>

	<div class="index-header-button">
		<a
		id="header-button" 
		href="<?php echo get_bloginfo('siteurl');?>/about" target="_blank">
			Join us, Go Frank!
		</a>
	</div>

</section>



<div class="brands-header">
	Meet frank brands
</div>

<!-- Filter brands functionality -->

<section class="filter-wrapper">

	<div class="filter">
		<button class="filter-button-desktop">Filter brands</button>
		<div class="filter-labels">
			<?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id" post_types="post"]' ); ?>
		</div>
	</div>

</section>


<!-- Wrapper around content of index -->

<section class="content-wrapper" id="frank-brands">


	<!-- Brands tiles -->

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="brand-tile">

				<a href="<?php the_permalink() ?>">
					<!-- Brand thumbnail -->
					<div class="brand-tile-thumbnail" onclick="location.href='<?php the_permalink() ?>'" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">

					<!-- Brand tag -->
						<div class="brand-tile-tag">
							<?php the_tags( ''); ?>
						</div>

					<!-- Brand labels -->					
						<div class="brand-thumbnail-labels-section">
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('green_production_label', $thumbnail_labels) ): ?>
								
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-sustainable.svg">
<!-- 										<p>Green Production</p>
 -->									</div>
								</div>
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-fair.svg">
<!-- 										<p>Fair labour</p>
 -->									</div>							
								</div>
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">							
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-vegan.svg">
<!-- 										<p>Vegan production</p>
 -->									</div>							
								</div> 
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('produced_in_eu_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">												
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-eu.svg">
<!-- 										<p>Produced in EU</p>
 -->									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<!-- Brand title -->
					<header class="brand-tile-header">
						<?php the_title( sprintf(
						'<h2 class="brand-tile-title" data-small-font="%s"><a href="%s">', get_field('smaller_font'), esc_url( get_permalink() ) ),
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


 <script type="text/javascript">
		$("#frank-brands-link").click(function() {
		$('html, body').animate({
			scrollTop: $("#frank-brands").offset().top - 150
		},1000);
		});
</script>