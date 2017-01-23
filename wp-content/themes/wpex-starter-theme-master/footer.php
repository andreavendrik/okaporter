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
			<p>
				<img src="<?php echo get_bloginfo('siteurl');?>/wp-content/themes/wpex-starter-theme-master/images/logo-liggend-black.svg">
			</p>
		</div>
		<div class="footer-content-section">
			<h4>What?</h4>
			<p>
				<span>Go Frank</span> is an initiative by Jonne Bosselaar and Andrea Vendrik.
				Read more about it <a href="<?php echo esc_url( home_url( '/about' ) );?>" rel="about">here.</a>
			</p>
		</div>
		<div class="footer-content-section">
			<h4>Get Frank</h4>
			<p>
				Got a sustainable fashion brand or project? We'd love to feature you. Simply fill in the <a href="<?php echo esc_url( home_url( '/about#brand-application-section' ) );?>" rel="about">form here</a>.  Did we mention it's free? 
				Any other questions, remarks, shout outs? <a href="mailto:hello@gofrank.nl">Email us</a>.
			</p>
		</div>
	</div>

	</footer><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</main>
</body>
</html>
