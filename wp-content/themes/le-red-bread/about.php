<?php
/**
*
*Template Name:about page
* @package RED_Starter_Theme
*/
get_header(); ?>
<div class="container">
<div class="motto">
<p> <?php echo ( CFS()->get('team_motto')); ?></p>
<hr class="decorative"> </hr>
</div>
<div class="special">
<div class="left-side">
<p> <?php echo ( CFS()->get('left_block')); ?></p>
</div>
<div class= "right-side">
<p> <?php echo ( CFS()->get('right_block')); ?></p>
</div>
</div>
<div class="our-story">
<p> <?php echo ( CFS()->get('our_story')); ?></p>
</div>
<section class="call-to-action clearfix">
<p>
 <span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
<a href="http://localhost:8888/le-red-bread/contact-4/"> <button class="btn">Contact Us</button></a>
  </p>
  </section>
</div>
<?php get_footer(); ?>
