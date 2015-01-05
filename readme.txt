=== Plugin Name ===
Contributors: woothemes, bryceadams
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal@woothemes.com&item_name=Donation+for+WooCommerce
Tags: woocommerce, woothemes, quantity, quantity increment, quantity buttons
Requires at least: 3.6.1
Tested up to: 4.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WooCommerce Quantity Increment re-adds the quantity buttons depreciated in WooCommerce 2.3

== Description ==

In WooCommerce 2.3, the quantity increment buttons have been depreciated, as most browsers now support `<input type="number" />`.

However, you may want to keep them. Simply install and activate this plugin to do so.

It optionally includes [Number Polyfill](https://github.com/jonstipe/number-polyfill), which is a polyfill for implementing the HTML5 `<input type="number">` element in browsers that do not currently support it.

To include it, add something like this to your `functions.php`:

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


== Screenshots ==

1. The Quantity Increment buttons

== Changelog ==

= 1.0 =
* Initial Release