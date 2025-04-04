<?php

function restrict_lock_block_to_admins( $settings ) {
    $user = wp_get_current_user();
    if ( 
        current_user_can( 'administrator' ) &&
        in_array( $user->user_email, array( 'sr@werbeagenten.de' ), true )
    ) {
            $settings[ 'codeEditingEnabled' ] = true;
            $settings[ 'canLockBlocks' ] = true;
    }else{
        $settings[ 'codeEditingEnabled' ] = false;
        $settings[ 'canLockBlocks' ] = false;
    }
    return $settings;
}
add_filter( 'block_editor_settings_all', 'restrict_lock_block_to_admins' );