<?php get_header(); ?>

<script>jQuery(document).ready(function(){
    jQuery('#showlabelinformation').live('click', function(event) {
         jQuery('#label_information').slideToggle(200,'swing');
    });
    jQuery('#show_searchandfilter_mobile').live('click', function(event) {
         jQuery('#searchandfilter_mobile').slideToggle(200,'swing');
    });
});</script>

<section id="main-index" class="main">

  <!-- Filter function -->

  <div class="filter_function">
  	<span>Filter by product:</span>
  	<?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
  </div>

<!-- Filter function mobile -->
  <div class="filter_function_mobile">
    <span id="show_searchandfilter_mobile">Filter by product</span>
    <div id="searchandfilter_mobile">
      <?php echo do_shortcode( '[searchandfilter taxonomies="category" types="checkbox" submit_label="Apply" order_by="id"]' ); ?>
    </div>
  </div>

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
								<img src="/okaporter_v2/wp-content/uploads/2016/11/organic-icon2.svg">
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label" id="label_labour">
								<img src="/okaporter_v2/wp-content/uploads/2016/11/fairlabour-icon2.svg">
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('recycling_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label" id="label_recycling">
								<img src="/okaporter_v2/wp-content/uploads/2016/11/recycling-icon2.svg">
							</div>
						<?php endif; ?>
						<?php
							$thumbnail_labels = get_field('thumbnail_labels');
							if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
							<div class="thumbnail_label" id="label_vegan">
								<img src="/okaporter_v2/wp-content/uploads/2016/11/vegan-icon2.svg">
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

<!-- Button that triggers label_information div -->
<div class="label_information_button">
	<input type="button" value="?" id="showlabelinformation"></input>
</div>

<!-- Popup with label information  -->
<div id="label_information">
	<p>LABELS</p>
	<p><img src="/okaporter_v2/wp-content/uploads/2016/11/organic-icon2.svg">organic materials</p>
	<p><img src="/okaporter_v2/wp-content/uploads/2016/11/fairlabour-icon2.svg">fair labour</p>
	<p><img src="/okaporter_v2/wp-content/uploads/2016/11/recycling-icon2.svg">recycling</p>
	<p><img src="/okaporter_v2/wp-content/uploads/2016/11/vegan-icon2.svg">vegan production</p>
</div>

<div class="warning">
  <p class="p1"><span class="s2">
  IMPORTANT: PLEASE KEEP IN MIND THAT THIS SITE IS UNDER DEVELOPMENT AND IS ONLY MEANT TO GIVE YOU A FIRST IMPRESSION. THE BRANDS INCLUDED ON THE HOME PAGE MERELY SERVE TO ILLUSTRATE AND ARE NOT CONFIRMED PART OF THIS PROJECT (YET).
  </span>
  </p>
</div>

</section><!-- #main -->

<?php get_footer(); ?>
