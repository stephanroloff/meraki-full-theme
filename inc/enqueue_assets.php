<?php

function scripts_and_styles(){
   wp_enqueue_style('main_style', get_theme_file_uri('/build/index.css'), array(), '1.0', 'all');
   wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), array(), '1.0', true );
}

function scripts_and_styles_editor(){   
//    wp_enqueue_style('main_style', get_theme_file_uri('/build/editor.scss.css'));
}


//******************************************************************/
 
//Just Frontend
// add_action('wp_enqueue_scripts', 'scripts_and_styles');

//Frontend & Editor
add_action('enqueue_block_assets', 'scripts_and_styles');

//Just Editor
// add_action('enqueue_block_editor_assets', 'scripts_and_styles_editor');