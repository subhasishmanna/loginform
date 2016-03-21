<?php


/*-------------------------------------------------------------------------------------*/
/* Login Hooks and Filters
/*-------------------------------------------------------------------------------------*/
if( ! function_exists( 'custom_login_fail' ) ) {
    function custom_login_fail( $username ) {
        $referrer = $_SERVER['HTTP_REFERER']; // where did the post submission come from?
        // if there's a valid referrer, and it's not the default log-in screen
        if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
            if ( !strstr($referrer,'?login=failed') ) { // make sure we don’t append twice
                wp_redirect( $referrer . '?login=failed' );
				
				// append some information (login=failed) to the URL for the theme to use
            } else {
                wp_redirect( $referrer );
            }
            exit;
        }
    }
}
add_action( 'wp_login_failed', 'custom_login_fail');














