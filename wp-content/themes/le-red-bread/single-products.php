<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="one-side">
 <div class="one-product">
			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
         <?php if ( has_post_thumbnail() ) : ?>
               <?php the_post_thumbnail( 'large' ); ?>
							 <p class="price-single"><strong>price:</strong> <?php echo esc_html( CFS()->get('price')); ?></p>
               <p><?php the_content(); ?></p>

               <?php endif; ?>



			<?php endwhile; // End of the loop. ?>
</div>

<div class="individual-sidebar">
<?php get_sidebar(); ?>
</div>
</div>

</main><!-- #main -->
</div><!-- #primary -->
</div>
<?php get_footer(); ?>
