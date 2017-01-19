<?php /**Template Name: About Page

* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
$content = $post->post_content;?>

<?php get_header(); ?>

<section class="content-wrapper">

	<div class="index-header">

		<div class="index-header-logo">
			<a href="<?php echo esc_url( home_url( '' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-staand-black.svg"></a>
		</div>
	</div>


  <section class="page-content">
    <?php echo $content ?>
  </section>

</section>

<?php get_footer(); ?>
