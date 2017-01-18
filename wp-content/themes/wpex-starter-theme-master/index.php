<?php get_header(); ?>

<!-- Add styling to active filter labels -->

<script>jQuery(document).ready(function(){
		jQuery('#show_filter-1').live('click', function(event) {
				 jQuery("#show_filter-1").toggleClass("filter-label-active");
		});    
});</script>


<!-- Logo & tagline underneath menu -->

	<div class="index-header">

		<div class="index-header-logo">
			<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-staand-black.svg"></a>
		</div>

		<div class="index-about-text">
			This is <span>Go Frank</span>, a collection of sustainable and fair fashion brands.<br> If you are looking to make more conscious fashion choices, this is the place to start. <a href="">Read more...</a>
		</div>
	</div>

<!--  -->

<section class="content-wrapper">

	<!-- Filter function -->

	<div class="filter-section">

		<div class="filter">

			<div class="filter-dropdown" id="filter-labels">
				<?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
			</div>
		</div>

	 </div>

<!-- Brands tiles -->

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="post">

			<a href="<?php the_permalink() ?>">
				<!-- Brand thumbnail -->
				<div class="post-thumbnail">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}?>
				<!-- Brand tag -->
					<div class="post-tag">
						<?php the_tags( ''); ?>
					</div>

				<!-- Labels -->
				
					<div class="thumbnail_labels_wrapper">
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('organic_cotton_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label">
								<div class="label">
									<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/organic-icon2.svg">
									<p>Organic materials</p>
								</div>
								<div class="divider">
									<hr></hr>
								</div>
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label">
								<div class="label">
									<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/fairlabour-icon2.svg">
									<p>Fair labour</p>
								</div>
								<div class="divider">
									<hr></hr>
								</div>								
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('recycling_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label">
								<div class="label">							
									<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/recycling-icon2.svg">
									<p>Recycled materials</p>
								</div>
								<div class="divider">
									<hr></hr>
								</div>								
							</div> 
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label">
								<div class="label">												
									<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/vegan-icon2.svg">
									<p>Vegan production</p>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<!-- Brand title -->
				<header class="post-header">
					<?php the_title( sprintf(
					'<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				); ?>
				</header>
			</a>
		</div>

	<?php endwhile; ?>
	<div class="post">

		<div class="post-call">
			<p>Your brand here?</p>
			<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icon-plus-black.svg" border=0>
		</div>
	</div>

<?php else : ?>

	<div class="no-filter-results">
		Snap! No brands match your search. 
	</div>

<?php endif; ?>

</section>

</main>

<?php get_footer(); ?>
