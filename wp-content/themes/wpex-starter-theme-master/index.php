<?php get_header(); ?>

<script>jQuery(document).ready(function(){
    jQuery('#showlabelinformation').live('click', function(event) {
         jQuery('#label_information').slideToggle(200,'swing');
    });
    jQuery('#show_filter-1').live('click', function(event) {
         jQuery('#filter-1').slideToggle(200,'swing');
    });
    jQuery('#show_filter-2').live('click', function(event) {
         jQuery('#filter-2').slideToggle(200,'swing');
    });
    jQuery('#show_filter-3').live('click', function(event) {
         jQuery('#filter-3').slideToggle(200,'swing');
    });        
});</script>

<section id="main-index" class="main">


<!-- Short introduction -->

<div class="about-text">
<span>This is Go Frank, a collection of sustainable and fair fashion brands.</span><br>If you are looking to make more conscious fashion choices, this is the place to start. <a href="">Read more...</a>
</div>

<!-- Filter function mobile -->

<div class="filter-section">

  <div class="filter">
    <div class="filter-toggle" id="show_filter-1">
    	<p>Product</p>
		<svg width="12px" height="9px" viewBox="0 0 12 9" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    		<g id="Desktop-app" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        		<g id="Desktop-Home" transform="translate(-1206.000000, -583.000000)" fill="#FFFFFF">
            	<polygon id="Triangle-3-Copy-4" points="1212 592 1206 583 1218 583"></polygon>
       			</g>
    		</g>
		</svg>
    </div>
    <div class="filter-dropdown" id="filter-1">
      <?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
    </div>
  </div>

    <div class="filter">
    <div class="filter-toggle" id="show_filter-2">Price</div>
    <div class="filter-dropdown" id="filter-2">
      <?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
    </div>
  </div>

    <div class="filter">
    <div class="filter-toggle" id="show_filter-3">Committed to</div>
    <div class="filter-dropdown" id="filter-3">
      <?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
    </div>
  </div>
 </div>

  <!-- Brands -->

  <?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<main class="post">
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
							<div class="thumbnail_label" id="label_organic">
								<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/organic-icon2.svg">
								<p>Organic materials</p>
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label" id="label_labour">
                				<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/fairlabour-icon2.svg">
                				<p>Fair labour</p>
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('recycling_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label" id="label_recycling">
                				<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/recycling-icon2.svg">
                				<p>Recycled materials</p>
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label" id="label_vegan">
               					<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/uploads/2016/11/vegan-icon2.svg">
               					<p>Vegan production</p>
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
		</main>

<?php endwhile; ?>

<?php else : ?>

	<?php // You can display a message there aren't any posts yet here ?>

<?php endif; ?>

</section><!-- #main -->

<?php get_footer(); ?>
