<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */
?>
<div class="contact-sidebar">
 <h2> CONTACT </h2>
 <p>  <i class="fa fa-phone"></i> <a>(555)3434567891</a> </p>
<p>	<i class="fa fa-envelope"></i> <a>info@leredbread.com</a></p>

<p> <i class="fa fa-map-marker"></i>123 Hastings Street<br>
Vancouver, BC V61 2T9, CA</p>
 </div>

<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
