<?php
/*
* Creating a function to create our CPT
*/

 function custom_post_type_reference() {
  // Set UI labels for Custom Post Type
     $labels = array(
         'name'                => __( 'References', 'Post Type General Name', 'default-theme' ),
         'singular_name'       => __( 'Reference', 'Post Type Singular Name', 'default-theme' ),
         'menu_name'           => __( 'References', 'default-theme' ),
         'parent_item_colon'   => __( 'Parent Project', 'default-theme' ),
         'all_items'           => __( 'All References', 'default-theme' ),
         'view_item'           => __( 'View Reference', 'default-theme' ),
         'add_new_item'        => __( 'Add New Reference', 'default-theme' ),
         'add_new'             => __( 'Add New', 'default-theme' ),
         'edit_item'           => __( 'Edit Reference', 'default-theme' ),
         'update_item'         => __( 'Update Reference', 'default-theme' ),
         'search_items'        => __( 'Search Reference', 'default-theme' ),
         'not_found'           => __( 'Not Found', 'default-theme' ),
         'not_found_in_trash'  => __( 'Not found in Trash', 'default-theme' ),
     );
      
 // Set other options for Custom Post Type
      
     $args = array(
        //  'label'               => __( 'References', 'default-theme' ),
        //  'description'         => __( 'Reference news and reviews', 'default-theme' ),
         'labels'              => $labels,
         // Features this CPT supports in Post Editor
         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         // You can associate this CPT with a taxonomy or custom taxonomy.
         'taxonomies'          => array( 'genres', 'category' ),
         /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'menu_position'       => 5,
         'menu_icon'           => 'dashicons-portfolio',
         'can_export'          => true,
         'has_archive'         => true,
         'rewrite' => array('slug' => 'referenzen'),
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'post',
         'show_in_rest' => true,
         'template' => array(
            array( 'core/pattern', array(
                // 'slug' => 'theme-slug/el-patron',
            ) ),
        ),
        'query_var'          => true,
     );
      
     // Registering your Custom Post Type
     register_post_type( 'references', $args );
  
 }
  
 /* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */
  
 add_action( 'init', 'custom_post_type_reference', 0 );