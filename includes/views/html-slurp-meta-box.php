<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div id="mijireh_notice" class="mijireh-info alert-message info" data-alert="alert">
	<h2><?php _e( 'Slurp your custom checkout page!', 'woocommerce-gateway-mijireh-checkout' ); ?></h2>
	<p><?php _e( 'Get the page designed just how you want and when you\'re ready, click the button below and slurp it right up.', 'woocommerce-gateway-mijireh-checkout' ); ?></p>
	<div id="slurp_progress" class="meter progress progress-info progress-striped active" style="display: none;">
		<div id="slurp_progress_bar" class="bar" style="width: 20%;"><?php _e( 'Slurping...', 'woocommerce-gateway-mijireh-checkout' ); ?></div>
	</div>
	<p><a href="#" id="page_slurp" rel="<?php echo $post->ID; ?>" class="button-primary"><?php _e( 'Slurp This Page!', 'woocommerce-gateway-mijireh-checkout' ); ?></a> <a class="nobold" href="<?php echo Mijireh::preview_checkout_link(); ?>" id="view_slurp" target="_new"><?php _e( 'Preview Checkout Page', 'woocommerce-gateway-mijireh-checkout' ); ?></a></p>
</div>
