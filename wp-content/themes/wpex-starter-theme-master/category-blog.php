<?php /**Template Name: Blog Page

* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
?>

<?php get_header(); ?>

<!-- <section class="page-header">
	<div class="header-tagline" id="page-header-tagline">
		The Frank Blog
	</div>
</section>

 -->

<section class="blog-wrapper">


	<!-- Brands tiles -->

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="blog-post-tile">

				<a href="<?php the_permalink() ?>">
					<!-- Brand thumbnail -->
					<div class="blog-post-thumbnail" 
						onclick="location.href='<?php the_permalink() ?>'" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
					</div>	

					<!-- Brand title -->
					<div class="blog-post-information">

					<!-- Brand tag -->
						<div class="blog-post-tag">
							<?php the_tags( ''); ?>
						</div>

						<div class="blog-post-title"> 
							<?php the_title( ''); ?>
						</div>

						<div class="blog-post-excerpt">
							<?php echo excerpt(30); ?>
						</div>

						<div class="blog-post-author">
							<?php the_field( 'reading-time' ); ?> • <?php $author = the_author(); ?>
						</div>

					</div>
				</a>
			</div>

		<?php endwhile; ?>


	<?php endif; ?>

	</div>

</section>
