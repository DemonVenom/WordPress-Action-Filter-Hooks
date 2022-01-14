<?php

    /**
     * Plugin Name: Custom WP Login
     * Version 0.1
     * Author: Henry Hoffman
     * License: GPL2+
     * Text Domain: cwpl
     */

    add_action( 'login_enqueue_scripts', 'cwpl_login_stylesheet' );

    /**
    * Load custom stylesheet on login page.
    */
    function cwpl_login_stylesheet() {

        wp_enqueue_style( 'cwpl-custom-stylsheet', plugin_dir_url(__FILE__) . 'login-styles.css' );
    }

    add_filter( 'login_errors', 'cwpl_error_message' );
    /**
     * Returns a custom login error message.
     */
    function cwpl_error_message() {
        return 'Well, that was not it!';
    }


    add_action( 'login_head', 'cwpl_remove_shake' );
    /**
     * Remove login page shake.
     */
    function cwpl_remove_shake() {
        remove_action( 'login_head', 'wp_shake_js', 12 );
    }


?>