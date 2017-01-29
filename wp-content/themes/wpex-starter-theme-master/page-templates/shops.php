<?php /**Template Name: Shops Page

* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
$content = $post->post_content;?>

<?php get_header(); ?>

<section class="page-wrapper" id="shops-page-wrapper">
		<div class="shops-page-about-text">
			Find shops selling frank brands in your neighborhood.
		</div>

	<div class="shops-map">
		<?php the_field ('shops_map') ?>
		</div>

</section>


<?php get_footer(); ?>
