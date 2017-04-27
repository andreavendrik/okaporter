<?php /**Template Name: About Page

* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
$content = $post->post_content;?>

<?php get_header(); ?>


<section class="page-header">
	<div class="header-tagline" id="page-header-tagline">
		Let's go frank together: our manifesto
	</div>
</section>

<section class="page-wrapper">
	<div class="page-content">
		<div id="page-introduction"><?php the_field ('introduction') ?></div>
		<?php the_field ('about_go_frank') ?>
	</div>

	<div class="page-content">
		<img src="../../../wp-content/themes/wpex-starter-theme-master/images/brands-header-swash.png">
	</div>

	<div class="page-content" id="mailchimp-form-wrapper">
		<div class="mailchimp-form">
			<h3>Join us, Go Frank!</h3>
			<p>Let's do this together! Subscribe to our monthly newsletter and let us help you to make better fashion choices starting today.</p>
			<form action="//gofrank.us15.list-manage.com/subscribe/post?u=b4cb67be017f0bcbe31903598&amp;id=92def1d047" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    <div class="mc-newsletter-application">
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address:</label>
						<input type="email" value="" name="EMAIL" class="required email mc-field" id="mce-EMAIL">
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">First Name:</label>
						<input type="text" value="" name="FNAME" class="mc-field" id="mce-FNAME">
						<div class="clear">
				    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				    	</div>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b4cb67be017f0bcbe31903598_92def1d047" tabindex="-1" value=""></div>
			    </div>
			</form>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
		</div>
	</div>

	<div class="page-content">
		<img src="../../../wp-content/themes/wpex-starter-theme-master/images/brands-header-swash.png">
	</div>

	<div class="page-content">
		<div id="brand-application-section">
			<h2>Your brand on this website?</h2>
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
	
	<div class="page-content" id="about-us">
		<h2>About us</h2>
		<?php the_field ('about_us') ?>
	</div>
</section>


<?php get_footer(); ?>
