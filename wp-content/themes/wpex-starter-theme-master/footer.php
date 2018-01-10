<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEX Starter Theme
 */

?>

	<footer id="footer" class="site-footer">
	<div class="footer-content">
		<div class="footer-content-section">
			<h4>What?</h4>		
			<p>
				<span>Go Frank</span> is a platform devoted to helping people who want to start making sustainable and fair fashion choices.
				Read more about it <a href="<?php echo esc_url( home_url( '/about' ) );?>" rel="about">here.</a>
			</p>
<!-- 			<p>
				<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-liggend-black.svg">
			</p> -->
		</div>
		<div class="footer-content-section">
			<h4>Who?</h4>
			<p>
				Go Frank is an initiative by Jonne Bosselaar and Andrea Vendrik.
				Any questions, remarks, shout outs? <a href="mailto:hello@gofrank.me">Email us</a>.
		 
			</p>
		</div>
		<div class="footer-content-section">
			<h4>Get Frank</h4>
			<p>
				Follow us on <a href="https://www.instagram.com/gofrankfashion" target="_blank">Instagram</a>, <a href="https://www.facebook.com/gofrankme" target="_blank">Facebook</a> or <a href="https://www.twitter.com/gofrankme" target="_blank">Twitter</a> for the latest news!
			</p>	
		</div>
	</div>

	</footer><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</main>
</body>
</html>
