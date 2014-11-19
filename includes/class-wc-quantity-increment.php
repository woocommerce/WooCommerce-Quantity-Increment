<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class WooCommerce_Quantity_Increment_Init {

    function __construct() {
 
    	add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

    }

    public function enqueue_scripts() {

        $min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

    	wp_register_script( 'wcqi-js', plugins_url( 'assets/js/wc-quantity-increment' . $min . '.js', plugin_dir_path( __FILE__ ) ), array( 'jquery' ) );
    	wp_register_style( 'wcqi-css', plugins_url( 'assets/css/wc-quantity-increment.css', plugin_dir_path( __FILE__ ) ) );
    	wp_register_script( 'wcqi-number-polyfill', plugins_url( 'assets/js/lib/number-polyfill.min.js', plugin_dir_path( __FILE__ ) ) );

    	wp_enqueue_script( 'wcqi-js' );
    	wp_enqueue_style( 'wcqi-css' );

    }

}

new WooCommerce_Quantity_Increment_Init;