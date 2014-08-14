<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<h3><?php echo $this->method_title; ?></h3>

<?php if ( empty( $this->access_key ) ) : ?>
	<div class="mijireh updated">
		<p class="main"><strong><?php _e( 'Get started with Mijireh Checkout', 'woocommerce-gateway-mijireh-checkout' ); ?></strong></p>
		<span><a href="http://www.mijireh.com/integrations/woocommerce/"><?php _e( 'Mijireh Checkout', 'woocommerce-gateway-mijireh-checkout' ); ?></a> <?php _e( 'provides a fully PCI Compliant, secure way to collect and transmit credit card data to your payment gateway while keeping you in control of the design of your site. Mijireh supports a wide variety of payment gateways: Stripe, Authorize.net, PayPal, eWay, SagePay, Braintree, PayLeap, and more.', 'woocommerce-gateway-mijireh-checkout' ); ?></span>

		<p><a href="http://secure.mijireh.com/signup" target="_blank" class="button button-primary"><?php _e( 'Join for free', 'woocommerce-gateway-mijireh-checkout' ); ?></a> <a href="http://www.mijireh.com/integrations/woocommerce/" target="_blank" class="button"><?php _e( 'Learn more about WooCommerce and Mijireh', 'woocommerce-gateway-mijireh-checkout' ); ?></a></p>
	</div>
<?php else : ?>
	<p><a href="http://www.mijireh.com/integrations/woocommerce/"><?php _e( 'Mijireh Checkout', 'woocommerce-gateway-mijireh-checkout' ); ?></a> <?php _e( 'provides a fully PCI Compliant, secure way to collect and transmit credit card data to your payment gateway while keeping you in control of the design of your site.', 'woocommerce-gateway-mijireh-checkout' ); ?></p>
<?php endif; ?>

<table class="form-table">
	<?php $this->generate_settings_html(); ?>
</table>
