<?php get_header(); ?>

<section id="main-single" class="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Header -->

			<header class="brand-header">
				<?php
				if (class_exists('MultiPostThumbnails')) :
				MultiPostThumbnails::the_post_thumbnail(get_post_type(), 				'secondary-image');
				endif;
				?>
			</header>

			<main class="brand-wrapper">
					<div class="brand-title">
						<div class="post-tag" id="post-tag-single">
							<?php the_tags( ''); ?>
						</div>
						<h1><?php the_title(); ?></h1>
					</div>

			<!-- Content -->

				<article class="brand-introduction">
					<div class="brand-introduction-text">
						<?php the_content(); ?>
					</div>
					<div class="brand-introduction-buttons">
						<a href="<?php the_field ('webshop_url') ?>" target="blank">
							<button class="button_wrapper">
								Shop online
							</button>
						</a>
						<a href="">
							<button class="button_wrapper" id="button_shops_on_map">
								Shops on map
							</button>
						</a>
					</div>
				</article>

				<article class="brand-content">

					<div class="brand-content-main">
						<h3>Why is this brand a good choice?</h3>


						<?php if( get_field('organic_materials') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image">
								<img src="
								<?php the_field ('organic_materials_icon') ?>">
							</div>
							<div class="labels-text">
								<h4>Organic materials</h4>
								<?php the_field( 'organic_materials' ) ?>
							</div>
						</div>
					<?php endif; ?>


					<?php if( get_field('fair_labour') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image">
								<img src="
								<?php the_field ('fair_labour_icon') ?>">
							</div>
							<div class="labels-text">
								<h4>Fair Labour</h4>
								<?php the_field( 'fair_labour' ) ?>
							</div>
						</div>
					<?php endif; ?>


					<?php if( get_field('recycling') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image">
								<img src="
								<?php the_field ('recycling_icon') ?>">
							</div>
							<div class="labels-text">
								<h4>Recycling</h4>
								<?php the_field( 'recycling' ) ?>
							</div>
						</div>
					<?php endif; ?>

					<?php if( get_field('vegan') ): ?>
						<div class="brand-content-labels">
							<div class="labels-image">
								<img src="
								<?php the_field ('vegan_icon') ?>">
							</div>
							<div class="labels-text">
								<h4>Vegan production</h4>
								<?php the_field( 'vegan' ) ?>
							</div>
						</div>
					<?php endif; ?>

				</div>

				<div class="brand-content-metadata">
					<h3>Information</h3>
					<div class="brand-content-metadata-section">
						<h4>Country of origin</h4>
						<?php the_field( 'country_of_origin' ) ?>
						</div>
					<div class="brand-content-metadata-section">
						<h4>Website</h4>
						<?php the_field( 'website' ) ?>
					</div>
					<div class="brand-content-metadata-section">
						<h4>official labels</h4>
						<?php the_field( 'official_labels' ) ?>
						</div>
					<div class="brand-content-metadata-section">
						<h4>Production</h4>
						<?php the_field( 'production' ) ?>
					</div>
				</div>
			</article>

			<article class="brand-content">

				<div class="brand-content-story">
					<?php if( get_field('brand_story') ): ?>
						<h3>The full story</h3>
						<div class="brand-content-labels">
							<div class="labels-text">
								<?php the_field( 'brand_story' ) ?>
							</div>
						</div>
					<?php endif; ?>
				</div>

				<div class="brand-content-story-empty">
				</div>

			</article>
		</main>

		<?php endwhile; // End of the loop. ?>

	</section><!-- #main -->

<?php get_footer(); ?>
