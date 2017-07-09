<?php /*
* Template Name: Join us
* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
?>

<?php get_header(); ?>

<section class="page-header" id="join-go-frank-header">

</section>


<?php while ( have_posts() ) : the_post(); ?> 


			<!-- header image -->
	<main class="page-wrapper">

		<div class="page-content">

			<div class="header-tagline">
				<h2><?php the_title(); ?></h2>
			</div>

			<div id="help-us-section">
            	<?php the_content(); ?> 
        	</div>
			</div>

    	</div>
	
	</main>

    <?php endwhile; wp_reset_query(); ?>				

			



	</section><!-- #main -->

 <script type="text/javascript">
		$("#button-map").click(function() {
		$('html, body').animate({
			scrollTop: $(".brand-map").offset().top - 150
		},1000);
		});
</script>

<?php get_footer(); ?>
