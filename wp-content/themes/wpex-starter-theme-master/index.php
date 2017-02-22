<?php get_header(); ?>

<!-- Logo & tagline underneath menu -->

<section class="index-header" id="index-header-id">

	<div class="index-header-logo">
			<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/gf-logo-20.svg"></a>
	</div>

	<div class="index-about-text">
		This is <span>Go Frank</span>, a noncommercial collection of sustainable and fair fashion brands.<br> If you are looking to make more conscious fashion choices, this is the place to start. <a href="<?php echo get_bloginfo('siteurl');?>/about">Read more...</a>
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
		jQuery('.filter-button-desktop').on('click', function(event) {
			jQuery('.filter-labels').slideToggle(200,'swing');		
			jQuery('.filter-button-desktop').toggleClass('filter-button-desktop-active');  	
		});    
});

//makes filter labels sticky to top on desktop

	var getWindowY = function() { return window.pageYOffset || document.documentElement.scrollTop }

	jQuery(window).scroll(function() {
		if(getWindowY() <= 400) {
			jQuery(".filter-wrapper").removeClass('filter-wrapper-active');
		} else {
			jQuery(".filter-wrapper").addClass('filter-wrapper-active');
		}
	})

//adds styling to main menu on scroll

	jQuery(window).scroll(function() {     
		var scroll = jQuery(window).scrollTop();
		if (scroll > 60) {
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
			}
			else {
				jQuery(this).parent().removeClass('filter-labels-active');        			
			}
		  });
		});  

//slide out menu

	jQuery(document).ready(function(){
		jQuery('#menu-toggle-button').on('click', function(event) {
			jQuery('#mobile-menu-slideout-panel').toggleClass('mobile-menu-slideout-panel-active');   
			jQuery('.website-wrapper').toggleClass('website-wrapper-active');          
			jQuery('.menu-wrapper').toggleClass('menu-wrapper-active');           			 
			jQuery('#menu-toggle-button').toggleClass('menu-toggle-button-active');    
		  });
		});  

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

<?php get_footer(); ?>
