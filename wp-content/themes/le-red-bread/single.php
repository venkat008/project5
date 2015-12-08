 <?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
			<div class="posts-side">
<div class="individual-posts">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>



			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
</div>
<div class="side-posts">
<?php get_sidebar(); ?>
</div>
</div>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
