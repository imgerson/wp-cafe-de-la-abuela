<?php
/**
 * Plugin Name: Customizations for cafedelaabuela.com
 * Theme URI: https://cafedelaabuela.com/
 * Description: Custom configuration for https://cafedelaabuela.com/
 * Author: imgersonr
 * Author URI: https://mostlydevstuff.com/
 * Version: 1.0.0
 * License: GPL3+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package CafeDeLaAbuela
 */

add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );

/**
 * This function overrides the default checkout fields for WooCommerce.
 *
 * @param array $fields Default checkout fields for WooCommerce.
 */
function custom_override_checkout_fields( $fields ) {
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_address_2'] );
	unset( $fields['billing']['billing_postcode'] );
	unset( $fields['billing']['billing_country'] );
	unset( $fields['billing']['billing_state'] );
	unset( $fields['shipping'] );

	return $fields;
}
