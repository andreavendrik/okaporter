<?php /*
* Template Name: Single Blog Post
* Template Post Type: post, page, product
* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
?>

<?php get_header(); ?>

<section id="main-single" class="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<!-- header image -->

			<header class="single-post-header" style="background-image: url('<?php echo MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image'); ?>')">
			</header>

			<main class="blog-wrapper" id="single-post-wrapper">

				<div class="single-post-title"> 
					<?php the_title( ''); ?>
				</div>

				<div class="single-post-author">
					<?php the_field( 'reading-time' ); ?> • <?php $author = the_author(); ?>
				</div>				

				<div class="single-post-content">
					<?php the_content( '') ?>
				</div>


			</section>

		<?php endwhile; // End of the loop. ?>


	</section><!-- #main -->

 <script type="text/javascript">
		$("#button-map").click(function() {
		$('html, body').animate({
			scrollTop: $(".brand-map").offset().top - 150
		},1000);
		});
</script>

<?php get_footer(); ?>
