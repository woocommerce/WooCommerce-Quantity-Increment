=== Plugin Name ===
Contributors: automattic, woothemes
Tags: woocommerce, quantity, quantity increment, quantity buttons, spinner
Requires at least: 4.1
Tested up to: 4.5
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WooCommerce Quantity Increment adds JavaScript powered quantity buttons to your cart page.

== Description ==

WooCommerce uses number inputs for the cart quantities by default, as most browsers now support `<input type="number" />`.

However, you may want to have JavaScript powered inputs if you want greater control over appearance. Simply install and activate this plugin to do so.

It optionally includes a [Number Polyfill](https://github.com/jonstipe/number-polyfill), which is a polyfill for implementing the HTML5 `<input type="number">` element in browsers that do not currently support it.

To include this, add the following code to your theme's `functions.php` file:

`
add_action( 'wp_enqueue_scripts', 'wcqi_enqueue_polyfill' );
function wcqi_enqueue_polyfill() {
    wp_enqueue_script( 'wcqi-number-polyfill' );
}
`

== Installation ==

1. Upload `woocommerce-quantity-increment` to the `/wp-content/plugins/` directory or search for 'WooCommerce Quantity Increment' from **Plugins > Add New**.
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= I don’t want to use the plugin styles as it looks bad with my theme =

You can add the following to your `functions.php` file:

`
add_action( 'wp_enqueue_scripts', 'wcs_dequeue_quantity' );
function wcs_dequeue_quantity() {
    wp_dequeue_style( 'wcqi-css' );
}
`

This will dequeue the plugin’s stylesheet.

== Changelog ==

= 1.1.0 =
* Updated to work with the WooCommerce 2.6 cart ajax script.

= 1.0 =
* Initial Release
