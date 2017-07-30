<?php get_header(); ?>

<!-- Logo & tagline underneath menu -->

<section class="index-header" id="index-header-id">

	<div class="index-header-swash">
		<img src="../../../wp-content/themes/wpex-starter-theme-master/images/index-swash-2.png">
	</div>

	<div class="header-tagline" id="index-tagline">
		<h2>Tired of fast fashion?<br>
		Go Frank!</h2>
	</div>

	<div class="index-header-text">
		Hello! Welcome to Go Frank. Are you looking to make more conscious fashion choices? You have come to the right place! Go Frank is here to help as your personal coach and guide. We introduce you to <a id="frank-brands-link">frank brands</a>, show where to <a href="<?php echo get_bloginfo('siteurl');?>/shops">find them</a>, and invite you to <a href="<?php echo get_bloginfo('siteurl');?>/about">do this together</a>! 
	</div>

</section>

<section class="index-cta">
	<b>Go Frank today!</b> Sign up to our newsletter for new brands, tips and more inspiration.

	<div class="index-cta-newsletter">
		<form action="//gofrank.us15.list-manage.com/subscribe/post?u=b4cb67be017f0bcbe31903598&amp;id=92def1d047" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div class="mc-newsletter-application" id="mc-newsletter-homepage">
						<input type="email" value="Your email address" name="EMAIL" class="required email mc-field" id="mce-EMAIL">
						<div class="clear">
				    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				    	</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b4cb67be017f0bcbe31903598_92def1d047" tabindex="-1" value=""></div>
			    </div>
			</form>
	</div>
</section>

<!-- Filter brands functionality -->

<section class="filter-wrapper">

		<div class="filter-bar">
			<h3>Frank brands</h3>
			<div class="filter-button-desktop">
				<p>Filter</p>
				</div>
		</div>
		<div class="filter-labels">
			<div class="searchandfilter">
				<h3>Committed to</h3>
				<?php
					$categories = get_categories([
						'include' => '15, 16, 17'
					]);
					//print_r($categories);
				?>
				<ul>
					<?php foreach($categories as $category): ?>
					<li class="cat-item cat-item-<?php echo $category->slug; ?>">
						<label>
							<span></span>
							<input
								class="filter-checkbox"
								type="checkbox"
								onchange="_handleFilterChange()"
								value="<?php echo $category->slug; ?>"
							>
							<?php echo $category->name; ?>
						</label>
					</li>
					<?php endforeach; ?>
				</ul>	

				<h3 id="filter-labels-products">Products</h3>
				<?php
					$categories = get_categories([
						'include' => '77,78,79,80,81'
					]);
					//print_r($categories);
				?>
				<ul>
					<?php foreach($categories as $category): ?>
					<li class="cat-item cat-item-<?php echo $category->slug; ?>">
						<label>
							<span></span>
							<input
								class="filter-checkbox"
								type="checkbox"
								onchange="_handleFilterChange()"
								value="<?php echo $category->slug; ?>"
							>
							<?php echo $category->name; ?>
						</label>
					</li>
					<?php endforeach; ?>
				</ul>					
			</div>
		</div>
	</div>

</section>


<!-- Wrapper around content of index -->

<section class="content-wrapper" id="frank-brands">


	<!-- Brands tiles -->

	<?php if ( have_posts() ) : ?>
		<?php
			while ( have_posts() ) : the_post();
			$thumbnail_labels = get_field('thumbnail_labels');
			
			$does_green_production = $thumbnail_labels && in_array('green_production_label', $thumbnail_labels);
			$does_fair_labour = $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels);
			$does_vegan = $thumbnail_labels && in_array('vegan_label', $thumbnail_labels);
			$does_accessories = $thumbnail_labels && in_category('accessories');
			$does_menswear = $thumbnail_labels && in_category('menswear');
			$does_womenswear = $thumbnail_labels && in_category('womenswear');
			$does_shoes = $thumbnail_labels && in_category('shoes');
			$does_bags = $thumbnail_labels &&  in_category('bags');
		?>

			<div
				class="brand-tile"
				data-green-production="<?php echo $does_green_production; ?>"
				data-fair-labour="<?php echo $does_fair_labour; ?>"
				data-vegan-production="<?php echo $does_vegan; ?>"
				data-womenswear="<?php echo $does_womenswear; ?>"		
				data-menswear="<?php echo $does_menswear; ?>"		
				data-shoes="<?php echo $does_shoes; ?>"		
				data-bags="<?php echo $does_bags; ?>"								
				data-accessories="<?php echo $does_accessories; ?>"	
			>

				<a href="<?php the_permalink() ?>">
					<!-- Brand thumbnail -->
					<div class="brand-tile-thumbnail" onclick="location.href='<?php the_permalink() ?>'" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
					</div>

					<!-- Brand title -->
					<header class="brand-tile-header">
						<?php the_title( sprintf(
						'<h2 class="brand-tile-title" data-small-font="%s"><a href="%s">', get_field('smaller_font'), esc_url( get_permalink() ) ),
						'</a></h2>'
					); ?>
					<!-- Brand tag -->					
						<div class="brand-tile-tag">
							<?php the_tags( ''); ?>
						</div>

					<!-- Brand labels -->					
						<div class="brand-thumbnail-labels-section">
							<div>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('green_production_label', $thumbnail_labels) ): ?>
								
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icon-green.svg" alt="green production">
<!-- 										<p>Green Production</p>
 -->									</div>
								</div>
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('fair_labour_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icon-fair.svg" alt="fair labour">
<!-- 										<p>Fair labour</p>
 -->									</div>							
								</div>
							<?php endif; ?>
							<?php
								$thumbnail_labels = get_field('thumbnail_labels');
								if( $thumbnail_labels && in_array('vegan_label', $thumbnail_labels) ): ?>
								<div class="brand-thumbnail-label-wrapper">
									<div class="brand-thumbnail-label">							
										<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/icon-vegan.svg" alt="vegan production">
<!-- 										<p>Vegan production</p>
 -->									</div>							
								</div> 
							<?php endif; ?>
							</div>

							<a
								id="learn-more-button" 
								href="<?php the_permalink() ?>">
									View brand
							</a>
						</div>
					</header>
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
<section class="index-cta" id="index-cta-bottom">
	<b>Going frank</b> means recognising the impact of fast fashion on people and planet, and resolving to make better choices onwards.<br>
	Go Frank today! Sign up to our newsletter for new brands, tips and more inspiration.

	<div class="index-cta-newsletter">
		<form action="//gofrank.us15.list-manage.com/subscribe/post?u=b4cb67be017f0bcbe31903598&amp;id=92def1d047" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div class="mc-newsletter-application" id="mc-newsletter-homepage">
						<input type="email" value="Your email address" name="EMAIL" class="required email mc-field" id="mce-EMAIL">
						<div class="clear">
				    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				    	</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b4cb67be017f0bcbe31903598_92def1d047" tabindex="-1" value=""></div>
			    </div>
			</form>
	</div>
</section>

<?php get_footer(); ?>


<script type="text/javascript">
		$("#frank-brands-link").click(function() {
		$('html, body').animate({
			scrollTop: $("#frank-brands").offset().top - 150
		},1000);
		});

		function _handleFilterChange() {
			var filterCheckboxes = $('.filter-checkbox');
			var selectedFilters = [];
			filterCheckboxes.each(function(i, item) {
				if(item.checked === true) {
					selectedFilters.push(item.value);
				}
			})
			var dataSelectorValues = selectedFilters.map(function(value) {
				return '[data-' + value + '="1"]';
			})
			var dataSelector = dataSelectorValues.join("");
			
			$('.brand-tile').hide();
			$('.brand-tile' + dataSelector).show();
			console.info('.brand-tile' + dataSelector);
		}
</script>