<?php
/**
 * Plugin Name: WooCommerce Mijireh Checkout
 * Plugin URI: http://www.woothemes.com/
 * Description: Mijireh Checkout provides a fully PCI Compliant, secure way to collect and transmit credit card data to your payment gateway while keeping you in control of the design of your site.
 * Version: 1.0.1
 * Author: WooThemes
 * Author URI: http://woothemes.com
 * Text Domain: woocommerce-gateway-mijireh-checkout
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'WC_Mijireh_Checkout' ) ) :

/**
 * Mijireh Checkout main class.
 */
class WC_Mijireh_Checkout {

	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	const VERSION = '1.0.1';

	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin public actions.
	 */
	private function __construct() {
		// Load plugin text domain
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		// Checks with WooCommerce is installed.
		if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.2', '>=' ) ) {
			$this->includes();

			add_filter( 'woocommerce_payment_gateways', array( $this, 'add_gateway' ) );

			if ( version_compare( WC_VERSION, '2.3', '>=' ) && is_admin() ) {
				add_action( 'add_meta_boxes', array( 'WC_Gateway_Mijireh', 'add_page_slurp_meta' ) );
			}
		} else {
			add_action( 'admin_notices', array( $this, 'woocommerce_missing_notice' ) );
		}
	}

	/**
	 * Return an instance of this class.
	 *
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @return void
	 */
	public function load_plugin_textdomain() {
		$locale = apply_filters( 'plugin_locale', get_locale(), 'woocommerce-gateway-mijireh-checkout' );

		load_textdomain( 'woocommerce-gateway-mijireh-checkout', trailingslashit( WP_LANG_DIR ) . 'woocommerce-gateway-mijireh-checkout/woocommerce-gateway-mijireh-checkout-' . $locale . '.mo' );
		load_plugin_textdomain( 'woocommerce-gateway-mijireh-checkout', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Includes.
	 *
	 * @return void
	 */
	private function includes() {
		include_once 'includes/class-wc-gateway-mijireh.php';
	}

	/**
	 * Add the gateway.
	 *
	 * @param  array $methods WooCommerce payment methods.
	 *
	 * @return array          Mijireh Checkout gateway.
	 */
	public function add_gateway( $methods ) {
		$methods[] = 'WC_Gateway_Mijireh';

		return $methods;
	}

	/**
	 * WooCommerce fallback notice.
	 *
	 * @return string
	 */
	public function woocommerce_missing_notice() {
		echo '<div class="error"><p>' . sprintf( __( 'Mijireh Checkout depends on the %s or later to work!', 'woocommerce-gateway-mijireh-checkout' ), '<a href="http://wordpress.org/extend/plugins/woocommerce/">' . __( 'WooCommerce 2.2', 'woocommerce-gateway-mijireh-checkout' ) . '</a>' ) . '</p></div>';
	}
}

add_action( 'plugins_loaded', array( 'WC_Mijireh_Checkout', 'get_instance' ), 0 );

endif;
