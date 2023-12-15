<?php

// Enable automatic creation of ACF field JSON files
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // Update the ACF JSON folder path
    $path = get_stylesheet_directory() . '/acf-json';
    // Create the ACF JSON folder if it doesn't exist
    if( !file_exists($path) ) {
        mkdir($path);
    }
    // Return the new ACF JSON folder path
    return $path;
}

// Enable automatic loading of ACF field JSON files
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // Remove the default ACF JSON folder load path
    unset($paths[0]);
    // Add the new ACF JSON folder path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    // Return the new ACF JSON folder paths
    return $paths;
}
