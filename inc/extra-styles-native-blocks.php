<?php
/**
* Block styles.
*/

function default_theme_register_block_styles() {

    //----BUTTON------------------------------------------------------------------

    register_block_style(
        'core/button',
        array(
            'name'         => 'button-style-2',
            'label'        => __( 'Button Style 2', 'textdomain' ),
            'is_default'   => false,
        )
    );

    //----GROUP-------------------------------------------------------------------

    register_block_style(
        'core/group',
        array(
            'name'         => 'group-style-2',
            'label'        => __( 'Group Position Relative', 'textdomain' ),
            'is_default'   => false,
        )
    );
 
}
add_action( 'init', 'default_theme_register_block_styles' );