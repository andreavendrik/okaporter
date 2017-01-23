<?php /**Template Name: About Page

* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
$content = $post->post_content;?>

<?php get_header(); ?>


<section class="index-header">
	<div class="index-header-logo" id="about-header">
	</div>
</section>

<section class="page-wrapper">
	<div class="page-content">
		<div id="page-introduction"><?php the_field ('introduction') ?></div>
		<?php the_field ('about_go_frank') ?>
	</div>

	<div class="page-content">
	<div id="brand-application-section">
		<h2>Your brand here?</h2>
		<?php the_field ('your_brand_here') ?>
		<?php wd_form_maker(10); ?>
	</div>
	</div>

	<div id="faq-section">
		<div class="page-content">
			<h2>Frequently Asked Questions</h2>
			<?php the_field ('faq') ?>
		</div>
	</div>

	<div class="page-content">
		<h2>About us</h2>
		<?php the_field ('about_us') ?>
	</div>
</section>


<?php get_footer(); ?>
