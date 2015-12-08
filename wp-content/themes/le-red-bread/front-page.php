<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<?php get_header(); ?>
<div class="front-top">
<div class="front-tag">
<h1>Baked to Perfection</h1>
</div>
</div>
<div class="posts-products">
<div class="front-product">
<?php    $taxonomy = 'product_type'; ?>
    <?php    $terms = get_terms($taxonomy); ?>
    <?php    if ($terms): ?>
    <?php    foreach($terms as $term): ?>
      <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/>
          <h3>  <?php    echo $term->name; ?><br /></h3>
                <?php    echo $term->description;?>
                    <a href="<?php echo get_term_link($term); ?>">See More...</a>
                  </li>
             <?php endforeach; ?>
         <?php endif; ?>
</div>


<section class="call-to-action clearfix">
         <p>
            <span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
            <a href="http://localhost:8888/le-red-bread/products/"><button class="btn">See Our Products</button></a>
         </p>
      </section>


<div class="fronttag-head">
  <h1> Our Latest News </h1>
  <hr class="decorative"> </hr>
  <div class="front-post">
<?php
   $args = array( 'posts_per_page' => 4, 'post_type' => 'post' );
   $blog_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>

       <li>

        <?php the_post_thumbnail('medium'); ?><br>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p><?php the_time ('d M Y'); ?>
         <?php comments_number('0 Comments'); ?></p>
    </li>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>

<section class="testimonial">
  <div class="container">
               <h2>what others say about us</h2>
               <hr class="decorative">
               <div class="front-testimonial">
                 <ul>
                   <?php
                       $args = array( 'posts_per_page' => 4, 'post_type' => 'testimonial');
                       $myposts = get_posts( $args );
                       foreach ( $myposts as $post ) : setup_postdata( $post );
                   ?>
          <li class="individual-testimonial">
              <div class="first-head">
               <?php echo wp_get_attachment_image( CFS()->get( 'headshot' ) ); ?>
                               <div class="review-content">
                                   <?php echo CFS()->get('content'); ?>
                                   <p class="reviewer-name"><?php the_title(); ?></p>
                                   <p class="reviewer-info">
                                       <?php echo CFS()->get('job_title'); ?> - <?php echo CFS()->get('company'); ?>
                                   </p>
                               </div>
                                </div>
                       </li>
                   <?php endforeach;wp_reset_postdata();?>

                 </ul>
                 </div>
               </div>
     </section>


<?php get_footer(); ?>
