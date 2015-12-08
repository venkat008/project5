<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type
function lrb_register_post_type() {

	$labels = array(
		'name'                => _x( 'products', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'products', 'text_domain' ),
		'name_admin_bar'      => __( 'products', 'text_domain' ),
		'parent_item_colon'   => __( '', 'text_domain' ),
		'all_items'           => __( 'products', 'text_domain' ),
		'add_new_item'        => __( 'product', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Item', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'product', 'text_domain' ),
		'description'         => __( 'products are delicious items that Le Red Bread sells.', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'lrb_register_post_type', 0 );


function lrb_register_testimonial_post_type() {

   $slug = 'testimonial';
   $name = 'Testimonials';
   $singular_name = 'Testimonial';

   $labels = array(
     'name'                => $name, 'Post Type General Name',
     'singular_name'       => $singular_name, 'Post Type Singular Name',
     'menu_name'           => $name,
     'parent_item_colon'   => sprintf( 'Parent %s:', $singular_name ),
     'all_items'           => 'All ' . $name,
     'view_item'           => 'View ' . $singular_name,
     'add_new_item'        => 'Add New ' . $singular_name,
     'add_new'             => 'New ' . $singular_name,
     'edit_item'           => 'Edit ' . $singular_name,
     'update_item'         => 'Update ' . $singular_name,
     'search_items'        => 'Search ' . strtolower( $name ),
     'not_found'           => sprintf( 'No %s found', strtolower( $name ) ),
     'not_found_in_trash'  => sprintf( 'No %s found in Trash', strtolower( $name ) ),
   );

   $args = array(
     'description'         => 'Testimonials are glowing reviews from happy customers.',
     'labels'              => $labels,
     'supports'            => array( 'title', 'editor', 'author', 'revisions', ),
     'hierarchical'        => false,
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'show_in_nav_menus'   => true,
     'show_in_admin_bar'   => true,
     'menu_position'       => 5,
     'menu_icon'           => 'dashicons-megaphone',
     'can_export'          => true,
     'has_archive'         => 'testimonials',
     'exclude_from_search' => false,
     'publicly_queryable'  => true,
     'capability_type'     => 'post',
   );

   register_post_type( $slug, $args );
 }
 add_action( 'init', 'lrb_register_testimonial_post_type' );

 /**
  * Change the "Enter the title" text for custom post types
  * @since 1.0.0
  *
  */
 function lrb_change_title_here_text( $input ) {
    global $post_type;

    if ( is_admin() && 'testimonial' == $post_type ) {
       return 'Enter customer first and last name here';
    }
    return $input;
 }
 add_filter( 'enter_title_here', 'lrb_change_title_here_text' );
