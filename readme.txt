=== WooCommerce Mijireh Checkout ===
Contributors: woothemes, mikejolley, claudiosanches
Tags: woocommerce, shortcodes
Requires at least: 4.0
Tested up to: 4.3
Stable tag: 1.0.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides integration between Mijireh Checkout and WooCommerce.

== Description ==

[Mijireh Checkout](http://www.mijireh.com/integrations/woocommerce/) provides a fully PCI Compliant, secure way to collect and transmit credit card data to your payment gateway while keeping you in control of the design of your site.

Starting WooCommerce 2.2, this Mijireh Checkout will no longer be part of WooCommerce and will only be available by using this plugin.

= Requeriments =

* WordPress 3.9 or later.
* WooCommerce 2.2 or later.

= Contribute =

You can contribute to the source code in our [GitHub](https://github.com/woothemes/woocommerce-gateway-mijireh-checkout) page.

== Installation ==

* Upload plugin files to your plugins folder, or install using WordPress built-in Add New Plugin installer;
* Activate the plugin;
* Sign up in [Mijireh Checkout](http://secure.mijireh.com/signup);
* Follow the [integration instructions](http://www.mijireh.com/integrations/woocommerce/);
* Go to WooCommerce -> Settings -> Checkout -> Mijireh Checkout and fill the options.
* It's ready! You can now use the Mijireh Checkout to process your customer payments.

== Frequently Asked Questions ==

= What is the plugin license? =

* This plugin is released under a GPL license.

= What is needed to use this plugin? =

* WordPress 3.9 or later.
* WooCommerce 2.2 or later.

= How this plugin works? =

* One account in [Mijireh Checkout](http://secure.mijireh.com/signup);

== Screenshots ==

1. Mijireh Checkout options
2. Mijireh Checkout payment option in checkout page

== Changelog ==

= 1.0.8 - 2015/09/23 =

* Added method to save the transaction ID.

= 1.0.7 - 2015/07/02 =

* Fixed the total and order items if running through the "send as lump" code.

= 1.0.6 - 2015/06/25 =

* Added a new method to check calculated order total and send as lump sum if totals don't match.

= 1.0.5 - 2015/06/23 =

* Fixed decimal values of taxes, discounts and shipping.
* Added `woocommerce_mijireh_checkout_mj_order` filter.

= 1.0.4 - 2015/04/14 =

* Added filter `woocommerce_mijireh_checkout_consolidated_char_limit` to circumvent issues with certain gateways with character limits

= 1.0.3 - 2015/03/13 =

* Fixed slurp page ajax request.

= 1.0.2 - 2015/02/13 =

* Fixed an error when use coupons and the "Prices Entered With Tax" option as "Yes, I will enter prices inclusive of tax".

= 1.0.1 - 2015/02/12 =

* Fixed the "Slurp your custom checkout page" meta box in WooCommerce 2.3.
* Added support for WooCommerce 2.3.

= 1.0.0 =

* Initial version.

== Upgrade Notice ==

= 1.0.8 =

* Added method to save the transaction ID.
