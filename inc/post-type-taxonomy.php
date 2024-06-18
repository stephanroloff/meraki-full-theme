<?php

function create_taxonomy_for_post_type_references() {
    $labels = array(
        'name'              => _x( 'References Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Reference Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Reference Categories' ),
        'all_items'         => __( 'All Reference Categories' ),
        'parent_item'       => __( 'Parent Reference Category' ),
        'parent_item_colon' => __( 'Parent Reference Category:' ),
        'edit_item'         => __( 'Edit Reference Category' ),
        'update_item'       => __( 'Update Reference Category' ),
        'add_new_item'      => __( 'Add New Reference Category' ),
        'new_item_name'     => __( 'New Reference Category Name' ),
        'menu_name'         => __( 'Reference Categories' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'reference-category' ),
        'show_in_rest' => true,
    );

    register_taxonomy( 'reference_category', array( 'references' ), $args );
}
add_action( 'init', 'create_taxonomy_for_post_type_references', 0 );
