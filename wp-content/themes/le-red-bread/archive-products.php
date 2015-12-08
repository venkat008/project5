 <?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="container">
<div class="products-tag">
  <h1>OUR PRODUCTS ARE MADE FRESH DAILY</h1>
<p>We are a team of creative and talented individuals who love making delicious treats.</p>
<hr class="decorative"> </hr>
</div>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
    <div class="container-producttypes">
      <div class="main-producttype">
          <?php    $taxonomy = 'product_type'; ?>
      <?php    $terms = get_terms($taxonomy); ?>
      <?php    if ($terms): ?>
      <?php    foreach($terms as $term): ?>
        <div class="individual-producttypes">
          <a href="<?php echo get_term_link($term); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/>
          <h3><?php echo $term->name;?></h3>
           </a>
         </div>
       <?php endforeach; ?>
       <?php endif; ?>
</div>
</div>

       <?php if ( have_posts() ) : ?>


<div class="main-products">
           <?php /* Start the Loop */ ?>

           <?php while ( have_posts() ) : the_post(); ?>
          <div class="product-price">
               <?php if ( has_post_thumbnail() ) : ?>

               <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
               <?php endif; ?>
               <!-- <div class="title-money"> -->
             <!-- <div class="product-title"> -->
              <ul class=leaders>
              <li> <?php the_title('<span class="entry-title">', '</span>' ); ?>
             <!-- </div> -->
             <!-- <div class="product-money"> -->
               <span class= "price"> Price: <?php echo esc_html( CFS()->get('price')); ?></span></li>
            <!-- </div> -->
          <!-- </div> -->
        </div>
           <?php endwhile; ?>

           <?php the_posts_navigation(); ?>

       <?php else : ?>

           <?php get_template_part( 'template-parts/content', 'none' ); ?>

       <?php endif; ?>
</div>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>

<?php get_footer(); ?>
