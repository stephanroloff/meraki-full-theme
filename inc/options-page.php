<?php
//In order for this code to work, ACF PRO must be installed.

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Main Menu',
        'menu_title'    => 'Main Menu',
        'menu_slug'     => 'main-menu',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}
