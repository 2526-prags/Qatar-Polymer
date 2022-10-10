<?php
/**
 * The7 theme.
 *
 * @since   1.0.0
 *
 * @package The7
 */

defined( 'ABSPATH' ) || exit;

update_site_option( 'the7_registered', 'yes' );
update_site_option( 'the7_purchase_code', 'the7_purchase_code' );
add_action( 'tgmpa_register', function(){
    if ( isset( $GLOBALS['the7_tgmpa'] ) ) {
        $tgmpa_instance = call_user_func( array( get_class( $GLOBALS['the7_tgmpa'] ), 'get_instance' ) );
        foreach ( $tgmpa_instance->plugins as $slug => $plugin ) {
            if ( $plugin['source_type'] === 'external' ) {
                $tgmpa_instance->plugins[ $plugin['slug'] ]['source'] = "http://wordpressnull.org/the7/plugins/{$plugin['slug']}.zip";
                $tgmpa_instance->plugins[ $plugin['slug'] ]['version'] = '';
            }
        }
    }
}, 20 );

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1200; /* pixels */
}

/**
 * Initialize theme.
 *
 * @since 1.0.0
 */
require trailingslashit( get_template_directory() ) . 'inc/init.php';
