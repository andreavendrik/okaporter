<?php /**Template Name: About Page

* @package WordPress
* @subpackage wpex-starter-theme-master

*/
global $post;
$content = $post->post_content;?>

<?php get_header(); ?>

<section id="main-index" class="main">

  <main class="page-content">
    <?php echo $content ?>
  </main>
</section><!-- #main -->

<?php get_footer(); ?>
