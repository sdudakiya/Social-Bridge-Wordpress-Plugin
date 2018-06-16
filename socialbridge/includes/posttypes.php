<?php

/*
* Register a custom post type called "SocialBridge".
*
* @see get_post_type_labels() for label keys.
*/
function socialbridge_cpt_init() {
   $labels = array(
       'name'                  => _x( 'SocialBridges', 'Post type general name', 'socialbridge' ),
       'singular_name'         => _x( 'SocialBridge', 'Post type singular name', 'socialbridge' ),
       'menu_name'             => _x( 'Social Bridge', 'Admin Menu text', 'socialbridge' ),
       'name_admin_bar'        => _x( 'SocialBridge', 'Add New on Toolbar', 'socialbridge' ),
       'add_new'               => __( 'Add New', 'socialbridge' ),
       'add_new_item'          => __( 'Add New Social Bridge', 'socialbridge' ),
       'new_item'              => __( 'New Social Bridge', 'socialbridge' ),
       'edit_item'             => __( 'Edit Social Bridge', 'socialbridge' ),
       'view_item'             => __( 'View Social Bridge', 'socialbridge' ),
       'all_items'             => __( 'All Social Bridges', 'socialbridge' ),
       'search_items'          => __( 'Search Social Bridges', 'socialbridge' ),
       'parent_item_colon'     => __( 'Parent Social Bridges:', 'socialbridge' ),
       'not_found'             => __( 'No Social Bridges found.', 'socialbridge' ),
       'not_found_in_trash'    => __( 'No Social Bridges found in Trash.', 'socialbridge' ),
       'featured_image'        => _x( 'Social Bridge Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'socialbridge' ),
       'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'socialbridge' ),
       'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'socialbridge' ),
       'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'socialbridge' ),
       'archives'              => _x( 'Social Bridge archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'socialbridge' ),
       'insert_into_item'      => _x( 'Insert into Social Bridge', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'socialbridge' ),
       'uploaded_to_this_item' => _x( 'Uploaded to this Social Bridge', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'socialbridge' ),
       'filter_items_list'     => _x( 'Filter Social Bridges list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'socialbridge' ),
       'items_list_navigation' => _x( 'Social Bridges list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'socialbridge' ),
       'items_list'            => _x( 'Social Bridges list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'socialbridge' ),
   );

   $args = array(
       'labels'             => $labels,
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'socialbridge' ),
       'capability_type'    => 'socialbridge',
       'has_archive'        => true,
       'hierarchical'       => false,
       'show_in_rest'       => true,
       'rest_base'          => 'socialbridge',
       'menu_position'      => null,
       'menu_icon'          => 'dashicons-exerpt-view',
       'supports'           => array( 'title', 'editor', 'author' ),
       'map_meta_cap'       => true,
   );

   register_post_type( 'socialbridge', $args );
}

add_action( 'init', 'socialbridge_cpt_init' );

/**
 * Flush rewrite rules on social bridge activation.
 */

function socialbridge_rewrite_flush(){
    socialbridge_cpt_init();
    flush_rewrite_rules();
}