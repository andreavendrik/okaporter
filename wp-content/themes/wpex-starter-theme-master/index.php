<?php get_header(); ?>

<!-- Logo & tagline underneath menu -->

<section class="index-header" id="index-header-id">

	<div class="index-header-logo">
			<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-staand-blue.svg"></a>
	</div>

	<div class="index-about-text">
		This is <span>Go Frank</span>, a collection of sustainable and fair fashion brands.<br> If you are looking to make more conscious fashion choices, this is the place to start. <a href="">Read more...</a>
	</div>

</section>


<!-- Filter brands functionality -->

<section class="filter-wrapper">

	<div class="filter">
		<button class="filter-button-desktop">Filter brands</button>
		<div class="filter-labels">
			<?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
		</div>
	</div>

</section>
	
<!-- Wrapper around content of index -->

<section class="content-wrapper">

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
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-sustainable-wit.svg">
										<p>Green Production</p>
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
								if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">							
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icoon-vegan-wit.svg">
										<p>Vegan production</p>
									</div>							
								</div> 
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('produced_in_eu_label', $thumbnail_labels) ): ?>
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

<script>

//adds styling and pulls out filter menu when filter button is clicked on mobile 

	jQuery(document).ready(function(){
		jQuery('.filter-button-desktop').live('click', function(event) {
			jQuery('.filter-labels').slideToggle(200,'swing');		
			jQuery('.filter-button-desktop').toggleClass('filter-button-desktop-active');  	
		});    
});

//makes filter labels sticky to top on desktop

	var  mn = jQuery(".filter-wrapper");
	mns = "filter-wrapper-active";
	hdr = document.getElementById('index-header-id').scrollHeight;

	jQuery(window).scroll(function() {
	  if( jQuery(window).scrollTop() > (hdr - 60) ) {
	    mn.addClass(mns);
	  } else {
	    mn.removeClass(mns);
	  }
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

<?php get_footer(); ?>
