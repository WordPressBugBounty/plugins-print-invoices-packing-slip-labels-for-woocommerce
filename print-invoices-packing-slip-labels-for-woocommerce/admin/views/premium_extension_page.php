<?php
/**
 * Other solutions (cross-sell) listing for the Extensions page.
 *
 * @package Print Invoices, Packing Slip, Delivery Note, Shipping Label for WooCommerce
 * @since   4.9.9
 */

defined( 'ABSPATH' ) || exit;

// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

$wt_pklist_os_img = WF_PKLIST_PLUGIN_URL . 'admin/images/other_solutions';

/* 'file_path' hides the card when that plugin is active. */
$wt_pklist_os_categories = array(

	'accounting-invoicing' => array(
		'label'      => __( 'Accounting & Invoicing', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'subtitle'   => __( 'Automatically generate professional WooCommerce invoices and documents for all your orders.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'icon'       => 'sidebar-accounting-invoicing.svg',
		'heroes'     => array(
			array(
				'name'        => __( 'PDF Invoices, Packing Slips, & Credit Notes', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'        => 'pdf-invoices-plugin.png',
				'rating'      => 'stars',
				'image'       => 'pdf-invoices-screenshot.svg',
				'image_width' => 105.42,
				'tint'        => 'invoice',
				'desc'        => __( 'Automatically generate, customize, and manage professional WooCommerce invoices, packing slips, and credit notes with advanced automation and tax compliance features.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'url'         => 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=PDF_invoice',
				'file_path'   => 'wt-woocommerce-invoice-addon/wt-woocommerce-invoice-addon.php',
			),
		),
		'plugins'    => array(
			array(
				'type'      => 'standard',
				'name'      => __( 'Shipping Labels, Dispatch Labels, & Delivery Notes', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'shipping-labels-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Create delivery notes, shipping & dispatch labels', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Enable customers to print the documents from order emails', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customize shipping label size', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add multiple shipping labels on one page', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Show product variation data', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add extra product & order data fields', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Pre-built layouts & customizable templates', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Group products by ‘Category’', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Sort products based on Name or SKU', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Multilingual support', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Shipping_Label',
				'file_path' => 'wt-woocommerce-shippinglabel-addon/wt-woocommerce-shippinglabel-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Picklists plugin', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'picklists-plugin.png',
				'rating'    => '4.0',
				'features'  => array(
					__( 'Bulk print picklists from the admin order page', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Automatically email picklists based on order status', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Create or customize picklist templates', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Show product variation data', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Group products in picklist by order/category', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add product meta fields & attributes', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Exclude virtual products from picklists', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Multilingual support', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-picklist/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Picklist',
				'file_path' => 'wt-woocommerce-picklist-addon/wt-woocommerce-picklist-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Customizer for WooCommerce PDF Invoices', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'pdf-customizer-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Drag-and-drop easy customization', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Advanced visual and code editor', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Easy invoice layout customization', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customize individual elements using block editors', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'View live preview of customization', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Change color, text, background, border & more', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/customizer-for-woocommerce-pdf-invoice/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=PDF_Customizer',
				'file_path' => 'wt-advanced-customizer-addon/wt-advanced-customizer-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Address Labels plugin', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'address-labels-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Generate ‘Shipping Address’, ‘Billing Address’, ‘From Address’, and ‘Return Address’ labels', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customize label sizes', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Bulk print address labels', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Offers built-in label templates', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Change address label layout', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Multilingual support', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-address-label/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Address_Label',
				'file_path' => 'wt-woocommerce-addresslabel-addon/wt-woocommerce-addresslabel-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Proforma Invoice', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'proforma-invoice-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Create proforma invoices automatically', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Pre-built proforma invoice layouts', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Easy invoice layout customization', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Attach proforma invoice PDF to order emails', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Allow customers to print invoices', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Set custom proforma invoice number', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add additional product & order data fields', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Attach special notes with proforma invoices', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Attach transport & sales terms', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Multilingual support', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-proforma-invoice/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Proforma_Invoice',
				'file_path' => 'wt-woocommerce-proforma-addon/wt-woocommerce-proforma-addon.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'QR Code Add-on for WooCommerce PDF Invoices', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'qr-code-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Assign QR codes to all generated invoices', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Create QR code that reads order or invoice number', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add custom data to invoices', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Compatible with WooCommerce PDF Invoice, Packing Slip & Credit Note (Premium)', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Compatible with WooCommerce PDF Invoices, Packing Slips, Delivery Notes, and Shipping Labels (Free)', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/qr-code-addon-for-woocommerce-pdf-invoices/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=QR_Code',
				'file_path' => 'qrcode-addon-for-woocommerce-pdf-invoices/qrcode-addon-for-woocommerce-pdf-invoices.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Request a Quote', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'request-quote-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Add quote button to the product & shop pages', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Enable quotation request for selected products', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Automatically send quotes to users', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Disable guest users from asking for quote', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Hide prices and ‘add to cart’ button', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Automatic email alerts for admin & users', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Easy button and form customization', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Set quote expiry period', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Limit spams with reCAPTCHA', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-request-a-quote/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Request_Quote',
				'file_path' => 'wt-woo-request-quote/wt-woo-request-quote.php',
			),
			array(
				'type'      => 'standard-with-image',
				'name'      => __( 'Sequential Order Numbers', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'sequential-orders-plugin.png',
				'rating'    => 'stars',
				'features'  => array(
					__( 'Auto reset sequence per month/year etc', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add a custom suffix for order numbers', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Date suffix in order numbers', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Custom sequence for free orders', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Increment sequence in custom series', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'More order number templates', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-sequential-order-numbers/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Sequential_Order_Numbers',
				'image_src' => 'seq-orders-illustration.png',
				'file_path' => 'wt-woocommerce-sequential-order-numbers-pro/wt-advanced-order-number-pro.php',
			),
		),
		'standalone' => null,
		'bundle'     => array(
			'tag_emoji'    => '📄',
			'tag_color'    => 'green',
			'tag'          => __( 'Invoice Bundle', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'title'        => __( 'All in one Invoice bundle', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'url'          => 'https://www.webtoffee.com/pdf-invoices-packing-slips-suite-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Invoice_bundle',
			'desc'         => __( 'A complete suite of invoices and shipping documents bundle to create and print PDF invoices, packing slips, shipping and delivery documents in WooCommerce.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'pills'        => array(
				__( 'Invoice', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Packing Slips', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Address Labels', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Dispatch Labels', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Shipping Labels', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Delivery Notes', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Picklists', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Proforma Invoice', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			),
			'price_orig'   => '$255',
			'price_sale'   => '$179',
			'savings'      => __( 'Save up to 30% off', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'illustration' => 'invoice-bundle.png',
			/* The five products the bundle covers — hidden once all are owned. */
			'file_path'    => array(
				'wt-woocommerce-invoice-addon/wt-woocommerce-invoice-addon.php',
				'wt-woocommerce-shippinglabel-addon/wt-woocommerce-shippinglabel-addon.php',
				'wt-woocommerce-addresslabel-addon/wt-woocommerce-addresslabel-addon.php',
				'wt-woocommerce-proforma-addon/wt-woocommerce-proforma-addon.php',
				'wt-woocommerce-picklist-addon/wt-woocommerce-picklist-addon.php',
			),
		),
	),

	'ecommerce-promotions' => array(
		'label'      => __( 'E-commerce Promotions', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'subtitle'   => __( 'Create and run successful promotional campaigns with the best marketing tools for WooCommerce', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'icon'       => 'sidebar-ecommerce-promotions.svg',
		'heroes'     => array(),
		'plugins'    => array(
			array(
				'type'      => 'standard',
				'name'      => __( 'Smart Coupons for WooCommerce', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'smart-coupons-plugin.png',
				'rating'    => '4.9',
				'features'  => array(
					__( 'Advanced BOGO Coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Offer store credits', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Create attractive gift cards', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Give away product coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Coupons based on past purchases', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Restrict coupons by country', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Create and offer sign-up discount coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Cart abandonment coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customizable countdown sales banner', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Bulk generate coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Import and export coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Coupon embeds', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Allow coupon combinations', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/smart-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=smart_coupons',
				'file_path' => 'wt-smart-coupon-pro/wt-smart-coupon-pro.php',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'URL Coupons for WooCommerce', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'     => 'url-coupons-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Generate custom coupon URLs', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Set up a redirect page', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Automatically add products', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Create QR code coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/url-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=URL_Coupons',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'WooCommerce Product Recommendations', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'product-recommendation-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Automatically generate suggestions based on order history', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Display recommended products on the product pages', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Quick setup page to add & edit recommendations', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Multiple product recommendation layouts', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Set up discounts on the recommended product bundle', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Manually create a bought-together list', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Use upsells, cross-sells, & related products as frequently bought products', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customize the title, button, and label texts', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customize the display of the recommended products', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-product-recommendations/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Product_Recommendations',
				'file_path' => 'wt-woocommerce-product-recommendations/wt-woocommerce-product-recommendations.php',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Coupon Generator', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'     => 'coupon-generator-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Bulk generate WooCommerce coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Bulk export WooCommerce coupons to CSV', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add usage restrictions to coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-coupon-generator/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Coupon_Generator',
			),
			array(
				'type'           => 'standard-with-image',
				'name'           => __( 'WooCommerce Gift Cards', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'           => 'gift-card-plugin.png',
				'rating'         => 'stars',
				'features'       => array(
					__( 'Create unlimited gift cards', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Email gift cards to customers', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Provide refunds to store credit', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( '20+ predefined gift card templates', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Category wise template listing', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add custom templates for gift cards', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Generate gift cards based on order status', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Manage user credit balance', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Fixed and custom gift card amounts', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add usage restrictions for gift cards', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'            => 'https://www.webtoffee.com/product/woocommerce-gift-cards/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=WooCommerce_Gift_Cards',
				'image_src'      => 'gift-cards-illustration.svg',
				/* Raise mock to match Figma framing. */
				'image_offset_y' => -6,
				'file_path'      => 'wt-woocommerce-gift-cards/wt-woocommerce-gift-cards.php',
			),
		),
		'standalone' => array(
			'name'       => __( 'ECommerce Marketing Automation App', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'icon'       => 'ema-app-plugin.png',
			'desc'       => __( 'Create signup forms, popups, and automated email campaigns with pre-built workflow templates to capture leads, recover abandoned carts, and grow sales.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'screenshot' => 'ema-screenshot.svg',
			'url'        => 'https://www.webtoffee.com/product/ecommerce-marketing-automation/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=EMA',
			'cta_label'  => __( 'Try now', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		),
		'bundle'     => array(
			'tag_emoji'    => '📣',
			'tag_color'    => 'yellow',
			'tag'          => __( 'Promotion Bundle', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'title'        => __( 'WooCommerce Promotion Bundle', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'url'          => 'https://www.webtoffee.com/woocommerce-promotions/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Promotion_Bundle',
			'desc'         => __( 'Make powerful promotional campaigns with our WooCommerce promotion bundle. Create coupon promotions, set up gift cards, and implement popular product recommendation strategies.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'pills'        => array(
				__( 'Smart Coupons', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Product recommendation', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				__( 'Gift cards', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			),
			'price_orig'   => '$277',
			'price_sale'   => '$194',
			'savings'      => __( 'Save up to 30% off', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'illustration' => 'promotion-bundle.png',
			/* The three products the bundle covers — hidden once all are owned. */
			'file_path'    => array(
				'wt-smart-coupon-pro/wt-smart-coupon-pro.php',
				'wt-woocommerce-gift-cards/wt-woocommerce-gift-cards.php',
				'wt-woocommerce-product-recommendations/wt-woocommerce-product-recommendations.php',
			),
		),
	),

	'privacy-compliance'   => array(
		'label'      => __( 'Privacy Compliance', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'subtitle'   => __( 'Ensure compliance with major cookie laws, including, GDPR, CCPA, LGPD, CNIL, and more.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'icon'       => 'sidebar-privacy-compliance.svg',
		'heroes'     => array(
			array(
				'name'          => __( 'GDPR Cookie Consent Plugin (CCPA Ready)', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'          => 'gdpr-plugin.png',
				'rating'        => 'stars',
				'image'         => 'cookie-consent.svg',
				'image_width'   => 109.34,
				'tint'          => 'privacy',
				'desc'          => __( 'This Google-certified CMP lets you create a customizable cookie banner, manage user consent, and ensure global privacy compliance with automatic script blocking.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'url'           => 'https://www.webtoffee.com/product/gdpr-cookie-consent/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=GDPR',
				/* Shipped under three different folder/file combinations. */
				'file_path_any' => array(
					'webtoffee-gdpr-cookie-consent/cookie-law-info.php',
					'webtoffee-cookie-consent/webtoffee-cookie-consent.php',
					'gdpr-cookie-consent-wp/webtoffee-cookie-consent.php',
				),
			),
			array(
				'name'      => __( 'EU Order Withdrawal Button Plugin for WooCommerce', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'eu-withdrawal-plugin.png',
				'rating'    => 'stars',
				'image'     => 'eu-withdrawal-illustration.png',
				'tint'      => 'privacy',
				'panel'     => 'flush',
				'features'  => array(
					__( 'Add "Request Withdrawal" button to WooCommerce', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Supports guest withdrawal option', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Two-step confirmation to prevent errors', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Full or partial order withdrawal support', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Dedicated admin dashboard for all requests', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Send email confirmation to customers', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/eu-withdrawal-button/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=EU_Withdarawal_Button',
				'file_path' => 'wt-eu-withdrawal-button/wt-eu-withdrawal-button.php',
			),
		),
		'plugins'    => array(),
		'standalone' => null,
		'bundle'     => null,
	),

	'data-import-export'   => array(
		'label'      => __( 'Data Import & Export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'subtitle'   => __( 'The best-in-class import, export, and migration solutions for your WooCommerce data.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
		'icon'       => 'sidebar-data-import-export.svg',
		'heroes'     => array(),
		'plugins'    => array(
			array(
				'type'      => 'standard',
				'name'      => __( 'Product Import Export Plugin', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'product-ie-plugin.png',
				'rating'    => '4.9',
				'features'  => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Schedule automated import and export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Support for multiple product types', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Export product images in a separate zip file', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Export to FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Advanced filters and customizations for import and export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add and update data while importing', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Maintains action history and debug logs', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/product-import-export-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Product_Import_Export',
				'file_path' => 'wt-import-export-for-woo-product/wt-import-export-for-woo-product.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Order, Coupon, Subscription Export Import', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'order-ie-plugin.png',
				'rating'    => '4.6',
				'features'  => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Schedule automated import & export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Email customers on order status change', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Create users on order import', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Filter export by products, order status, email, date, etc', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Export to FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Advanced filters and customizations for import & export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add & update data while importing', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Maintains action history and debug logs', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/order-import-export-plugin-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Order_Import_Export',
				'file_path' => 'wt-import-export-for-woo-order/wt-import-export-for-woo-order.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'User Import Export Plugin', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'user-ie-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Schedule automated import and export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Customize and send emails to new users on import', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Retain user passwords on import/export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Export and import custom fields and third-party plugin fields', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Filter by user role, email, date, etc', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Export to FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Advanced filters and customizations for import & export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add & update data while importing', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Maintains action history and debug logs', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/wordpress-users-woocommerce-customers-import-export/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=User_Import_Export',
				'file_path' => 'wt-import-export-for-woo-user/wt-import-export-for-woo-user.php',
			),
			array(
				'type'      => 'standard',
				'name'      => __( 'Product Feed & Sync Manager', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'      => 'product-feed-plugin.png',
				'rating'    => '5.0',
				'features'  => array(
					__( 'Generate WooCommerce product feeds for Google Shopping, Facebook Shop, and Instagram Shop', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Sync WooCommerce products to Facebook catalog', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Additional feed intervals (30 minutes, 6 hours, 12 hours)', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Support for additional fields that can be added to the feed', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'WPML multilingual and multicurrency support', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Google local product inventory feed', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Exclude specific products', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Include or exclude specific categories', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Exclude out-of-stock products', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Filter products based on product type', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Map categories on product level', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'       => 'https://www.webtoffee.com/product/woocommerce-product-feed/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=WooCommerce_Product_Feed',
				'file_path' => 'webtoffee-product-feed-pro/webtoffee-product-feed-pro.php',
			),
			array(
				'type'           => 'standard-with-image',
				'name'           => __( 'Import Export Suite for WooCommerce', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				'icon'           => 'ie-suite-plugin.png',
				'rating'         => 'stars',
				'features'       => array(
					__( 'Import/export Products, Orders, Subscriptions, Coupons, Customers, WordPress Users, Categories & Tags, Reviews', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Schedule automated import & export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Export to FTP/SFTP', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Import & export custom fields and values', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Advanced filters and customizations for import & export', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Add and update data while importing', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Maintains action history and debug logs', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'print-invoices-packing-slip-labels-for-woocommerce' ),
				),
				'url'            => 'https://www.webtoffee.com/product/woocommerce-import-export-suite/?utm_source=other_solution_page&utm_medium=free_plugin_related_products&utm_campaign=Import_Export_Suite',
				'image_src'      => 'data-io-illustration.svg',
				/* Pull tilted mock toward the CTA (Figma: near the button). */
				'image_zoom'     => 1.15,
				'image_offset_x' => -4,
				/* Owned outright when the suite itself is installed... */
				'file_path_any'  => 'wt-import-export-for-woo/wt-import-export-for-woo.php',
				/* ...or effectively owned once all three standalones are. */
				'file_path'      => array(
					'wt-import-export-for-woo-product/wt-import-export-for-woo-product.php',
					'wt-import-export-for-woo-user/wt-import-export-for-woo-user.php',
					'wt-import-export-for-woo-order/wt-import-export-for-woo-order.php',
				),
			),
		),
		'standalone' => null,
		'bundle'     => null,
	),
);

/**
 * Filter the Other solutions content model.
 *
 * @since 4.9.9
 *
 * @param array $wt_pklist_os_categories Category definitions.
 */
// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound -- matches this plugin's established wt_pklist_ hook prefix.
$wt_pklist_os_categories = apply_filters( 'wt_pklist_other_solutions_categories', $wt_pklist_os_categories );

// Drop cards for plugins already active.
foreach ( $wt_pklist_os_categories as $wt_pklist_os_key => $wt_pklist_os_cat ) {
	$wt_pklist_os_categories[ $wt_pklist_os_key ]['heroes'] = WT_PKLIST_Other_Solutions::filter_cards(
		isset( $wt_pklist_os_cat['heroes'] ) ? $wt_pklist_os_cat['heroes'] : array()
	);

	$wt_pklist_os_categories[ $wt_pklist_os_key ]['plugins'] = WT_PKLIST_Other_Solutions::filter_cards(
		isset( $wt_pklist_os_cat['plugins'] ) ? $wt_pklist_os_cat['plugins'] : array()
	);

	/*
	 * A bundle or standalone promo carrying a 'file_path' is dropped once the
	 * store owns everything in it — there is nothing left to sell. Entries
	 * without one are never filtered.
	 */
	foreach ( array( 'bundle', 'standalone' ) as $wt_pklist_os_slot ) {
		if ( ! empty( $wt_pklist_os_cat[ $wt_pklist_os_slot ] )
			&& WT_PKLIST_Other_Solutions::is_plugin_active_card( $wt_pklist_os_cat[ $wt_pklist_os_slot ] ) ) {
			$wt_pklist_os_categories[ $wt_pklist_os_key ][ $wt_pklist_os_slot ] = null;
		}
	}

	// Drop the category, and its sidebar tab, once it has nothing left to show.
	if ( empty( $wt_pklist_os_categories[ $wt_pklist_os_key ]['heroes'] )
		&& empty( $wt_pklist_os_categories[ $wt_pklist_os_key ]['plugins'] )
		&& empty( $wt_pklist_os_categories[ $wt_pklist_os_key ]['bundle'] )
		&& empty( $wt_pklist_os_categories[ $wt_pklist_os_key ]['standalone'] ) ) {
		unset( $wt_pklist_os_categories[ $wt_pklist_os_key ] );
	}
}


if ( empty( $wt_pklist_os_categories ) ) {
	?>
	<div class="wt-pklist-os-page">
		<div class="wt-pklist-os-header">
			<h1 class="wt-pklist-os-page-title"><?php esc_html_e( 'Extensions', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></h1>
			<p class="wt-pklist-os-page-subtitle"><?php esc_html_e( 'You already have every solution we recommend. Thank you for your support!', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></p>
		</div>
	</div>
	<?php
	return;
}

$wt_pklist_os_keys  = array_keys( $wt_pklist_os_categories );
$wt_pklist_os_first = reset( $wt_pklist_os_keys );
$wt_pklist_os_head  = $wt_pklist_os_categories[ $wt_pklist_os_first ];
?>

<div class="wt-pklist-os-page">

	<div class="wt-pklist-os-header">
		<h1 class="wt-pklist-os-page-title" id="wt-pklist-os-cat-title"><?php echo esc_html( $wt_pklist_os_head['label'] ); ?></h1>
		<p class="wt-pklist-os-page-subtitle" id="wt-pklist-os-cat-subtitle"><?php echo esc_html( $wt_pklist_os_head['subtitle'] ); ?></p>
	</div>

	<div class="wt-pklist-os-layout">

		<?php /* ---- Sidebar ---- */ ?>
		<div class="wt-pklist-os-sidebar">
			<ul class="wt-pklist-os-sidebar-nav">
				<?php foreach ( $wt_pklist_os_categories as $wt_pklist_os_key => $wt_pklist_os_cat ) : ?>
					<li>
						<a href="#"
							class="wt-pklist-os-cat-link<?php echo ( $wt_pklist_os_key === $wt_pklist_os_first ) ? ' active' : ''; ?>"
							data-category="<?php echo esc_attr( $wt_pklist_os_key ); ?>">
							<img class="wt-pklist-os-cat-icon"
								src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_cat['icon'] ); ?>"
								alt="">
							<?php echo esc_html( $wt_pklist_os_cat['label'] ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

			<div class="wt-pklist-os-trust-badges">
				<div class="wt-pklist-os-trust-badge">
					<img src="<?php echo esc_url( $wt_pklist_os_img . '/thirty-day-guarantee.png' ); ?>"
						alt="<?php esc_attr_e( '30 Day Money Back Guarantee', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>">
					<span><?php esc_html_e( '30 Day No Risk Money Back Guarantee', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></span>
				</div>
				<div class="wt-pklist-os-trust-badge">
					<img src="<?php echo esc_url( $wt_pklist_os_img . '/satisfaction-badge.png' ); ?>"
						alt="<?php esc_attr_e( '99% Satisfaction Rating', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>">
					<span><?php esc_html_e( 'Fast Support with 99% Satisfaction Rating', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></span>
				</div>
			</div>
		</div>

		<?php /* ---- Main content ---- */ ?>
		<div class="wt-pklist-os-main">

			<?php foreach ( $wt_pklist_os_categories as $wt_pklist_os_key => $wt_pklist_os_cat ) : ?>
				<div id="wt-pklist-os-panel-<?php echo esc_attr( $wt_pklist_os_key ); ?>"
					class="wt-pklist-os-category-panel<?php echo ( $wt_pklist_os_key === $wt_pklist_os_first ) ? ' active' : ''; ?>"
					data-title="<?php echo esc_attr( $wt_pklist_os_cat['label'] ); ?>"
					data-subtitle="<?php echo esc_attr( $wt_pklist_os_cat['subtitle'] ); ?>">

					<?php /* -- Hero cards -- */ ?>
					<?php foreach ( $wt_pklist_os_cat['heroes'] as $wt_pklist_os_hero ) : ?>
						<div class="wt-pklist-os-hero-card">
							<div class="wt-pklist-os-hero-left">
								<div class="wt-pklist-os-hero-title-row">
									<img class="wt-pklist-os-hero-icon"
										src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_hero['icon'] ); ?>"
										alt="<?php echo esc_attr( $wt_pklist_os_hero['name'] ); ?>">
									<h3 class="wt-pklist-os-hero-name"><?php echo esc_html( $wt_pklist_os_hero['name'] ); ?></h3>
								</div>
								<div class="wt-pklist-os-hero-stars">
									<?php for ( $wt_pklist_os_i = 0; $wt_pklist_os_i < 5; $wt_pklist_os_i++ ) : ?>
										<span class="wt-pklist-os-star">&#9733;</span>
									<?php endfor; ?>
								</div>
								<?php if ( ! empty( $wt_pklist_os_hero['desc'] ) ) : ?>
									<p class="wt-pklist-os-hero-desc"><?php echo esc_html( $wt_pklist_os_hero['desc'] ); ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $wt_pklist_os_hero['features'] ) ) : ?>
									<ul class="wt-pklist-os-card-features wt-pklist-os-hero-features">
										<?php foreach ( $wt_pklist_os_hero['features'] as $wt_pklist_os_feature ) : ?>
											<li>
												<span class="wt-pklist-os-check" aria-hidden="true"></span>
												<?php echo esc_html( $wt_pklist_os_feature ); ?>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<a href="<?php echo esc_url( $wt_pklist_os_hero['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-pklist-os-btn-premium wt-pklist-os-btn-premium--block">
									<span class="wt-pklist-os-btn-star" aria-hidden="true">&#9733;</span>
									<?php esc_html_e( 'Get premium', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>
								</a>
							</div>
							<?php if ( ! empty( $wt_pklist_os_hero['image'] ) ) : ?>
								<?php
								$wt_pklist_os_tint  = ! empty( $wt_pklist_os_hero['tint'] ) ? $wt_pklist_os_hero['tint'] : 'privacy';
								$wt_pklist_os_flush = ( ! empty( $wt_pklist_os_hero['panel'] ) && 'flush' === $wt_pklist_os_hero['panel'] );
								$wt_pklist_os_hw    = ! empty( $wt_pklist_os_hero['image_width'] ) ? (float) $wt_pklist_os_hero['image_width'] : 100;
								?>
								<div class="wt-pklist-os-hero-right wt-pklist-os-hero-right--<?php echo esc_attr( $wt_pklist_os_tint ); ?><?php echo $wt_pklist_os_flush ? ' wt-pklist-os-hero-right--flush' : ''; ?>"
									style="--wt-pklist-os-hero-w: <?php echo esc_attr( $wt_pklist_os_hw ); ?>%;">
									<img src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_hero['image'] ); ?>"
										alt="<?php echo esc_attr( $wt_pklist_os_hero['name'] ); ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>

					<?php /* -- Plugin card grid -- */ ?>
					<?php if ( ! empty( $wt_pklist_os_cat['plugins'] ) ) : ?>
						<?php foreach ( WT_PKLIST_Other_Solutions::rows( $wt_pklist_os_cat['plugins'] ) as $wt_pklist_os_row ) : ?>
							<div class="wt-pklist-os-card-grid">
								<?php foreach ( $wt_pklist_os_row as $wt_pklist_os_card ) : ?>

									<?php if ( 'image' === $wt_pklist_os_card['type'] ) : ?>

										<div class="wt-pklist-os-card-image">
											<img src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_card['src'] ); ?>" alt="">
										</div>

										<?php
									else :
										$wt_pklist_os_with_image = ( 'standard-with-image' === $wt_pklist_os_card['type'] && ! empty( $wt_pklist_os_card['image_src'] ) );
										?>

										<div class="wt-pklist-os-card<?php echo $wt_pklist_os_with_image ? ' wt-pklist-os-card--with-image' : ''; ?>">
											<div class="wt-pklist-os-card-body">
												<div class="wt-pklist-os-card-header">
													<div class="wt-pklist-os-card-icon-name">
														<img class="wt-pklist-os-card-icon"
															src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_card['icon'] ); ?>"
															alt="<?php echo esc_attr( $wt_pklist_os_card['name'] ); ?>">
														<span class="wt-pklist-os-card-name"><?php echo esc_html( $wt_pklist_os_card['name'] ); ?></span>
													</div>
													<?php if ( 'stars' === $wt_pklist_os_card['rating'] ) : ?>
														<span class="wt-pklist-os-card-rating wt-pklist-os-card-rating--stars">
															<?php for ( $wt_pklist_os_i = 0; $wt_pklist_os_i < 5; $wt_pklist_os_i++ ) : ?>
																<span class="wt-pklist-os-star">&#9733;</span>
															<?php endfor; ?>
														</span>
													<?php else : ?>
														<span class="wt-pklist-os-card-rating">
															<?php echo esc_html( $wt_pklist_os_card['rating'] ); ?>
															<span class="wt-pklist-os-star">&#9733;</span>
														</span>
													<?php endif; ?>
												</div>
												<ul class="wt-pklist-os-card-features">
													<?php foreach ( $wt_pklist_os_card['features'] as $wt_pklist_os_fi => $wt_pklist_os_feature ) : ?>
														<li<?php echo ( $wt_pklist_os_fi > 2 ) ? ' class="hidden-feature"' : ''; ?>>
															<span class="wt-pklist-os-check" aria-hidden="true"></span>
															<?php echo esc_html( $wt_pklist_os_feature ); ?>
														</li>
													<?php endforeach; ?>
												</ul>
												<?php if ( count( $wt_pklist_os_card['features'] ) > 3 ) : ?>
													<div class="wt-pklist-os-show-more-less">
														<a href="#"
															class="wt-pklist-os-cta-toggle"
															data-show-text="<?php esc_attr_e( 'Show More', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>"
															data-hide-text="<?php esc_attr_e( 'Show Less', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>"><?php esc_html_e( 'Show More', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></a>
													</div>
												<?php endif; ?>
												<a href="<?php echo esc_url( $wt_pklist_os_card['url'] ); ?>"
													target="_blank"
													rel="noopener noreferrer"
													class="wt-pklist-os-btn-premium">
													<span class="wt-pklist-os-btn-star" aria-hidden="true">&#9733;</span>
													<?php esc_html_e( 'Get premium', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>
												</a>
											</div>
											<?php
											if ( $wt_pklist_os_with_image ) :
												$wt_pklist_os_zoom     = ! empty( $wt_pklist_os_card['image_zoom'] ) ? (float) $wt_pklist_os_card['image_zoom'] : 1;
												$wt_pklist_os_offset_y = isset( $wt_pklist_os_card['image_offset_y'] ) ? (float) $wt_pklist_os_card['image_offset_y'] : 0;
												$wt_pklist_os_offset_x = isset( $wt_pklist_os_card['image_offset_x'] ) ? (float) $wt_pklist_os_card['image_offset_x'] : 0;
												?>
												<div class="wt-pklist-os-card-image-side" style="--wt-pklist-os-zoom: <?php echo esc_attr( $wt_pklist_os_zoom ); ?>; --wt-pklist-os-offset-y: <?php echo esc_attr( $wt_pklist_os_offset_y ); ?>%; --wt-pklist-os-offset-x: <?php echo esc_attr( $wt_pklist_os_offset_x ); ?>%;">
													<img src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_card['image_src'] ); ?>" alt="">
												</div>
											<?php endif; ?>
										</div>

									<?php endif; ?>

								<?php endforeach; ?>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>

					<?php /* -- Bundle -- */ ?>
					<?php
					if ( ! empty( $wt_pklist_os_cat['bundle'] ) ) :
						$wt_pklist_os_bundle    = $wt_pklist_os_cat['bundle'];
						$wt_pklist_os_tag_color = ! empty( $wt_pklist_os_bundle['tag_color'] ) ? $wt_pklist_os_bundle['tag_color'] : 'green';
						?>
						<div class="wt-pklist-os-bundle">
							<div class="wt-pklist-os-bundle-content">
								<span class="wt-pklist-os-bundle-tag wt-pklist-os-bundle-tag--<?php echo esc_attr( $wt_pklist_os_tag_color ); ?>">
									<?php if ( ! empty( $wt_pklist_os_bundle['tag_emoji'] ) ) : ?>
										<span class="wt-pklist-os-bundle-tag-emoji"><?php echo esc_html( $wt_pklist_os_bundle['tag_emoji'] ); ?></span>
									<?php endif; ?>
									<?php echo esc_html( $wt_pklist_os_bundle['tag'] ); ?>
								</span>
								<div class="wt-pklist-os-bundle-title">
									<a href="<?php echo esc_url( $wt_pklist_os_bundle['url'] ); ?>"
										target="_blank"
										rel="noopener noreferrer">
										<?php echo esc_html( $wt_pklist_os_bundle['title'] ); ?>
									</a>
									<span class="wt-pklist-os-ext-arrow" aria-hidden="true"></span>
								</div>
								<p class="wt-pklist-os-bundle-desc"><?php echo esc_html( $wt_pklist_os_bundle['desc'] ); ?></p>
								<div class="wt-pklist-os-bundle-pills">
									<?php foreach ( $wt_pklist_os_bundle['pills'] as $wt_pklist_os_pill ) : ?>
										<span class="wt-pklist-os-bundle-pill">
											<span class="wt-pklist-os-pill-tick" aria-hidden="true"></span>
											<?php echo esc_html( $wt_pklist_os_pill ); ?>
										</span>
									<?php endforeach; ?>
								</div>
								<p class="wt-pklist-os-bundle-pricing">
									<?php
									printf(
										wp_kses(
											/* translators: 1: strikethrough original price, 2: bold sale price, 3: savings text */
											__( 'Total : <s>%1$s</s> <strong>%2$s</strong> <span class="wt-pklist-os-savings">(%3$s)</span>', 'print-invoices-packing-slip-labels-for-woocommerce' ),
											array(
												's'      => array(),
												'strong' => array(),
												'span'   => array( 'class' => array() ),
											)
										),
										esc_html( $wt_pklist_os_bundle['price_orig'] ),
										esc_html( $wt_pklist_os_bundle['price_sale'] ),
										esc_html( $wt_pklist_os_bundle['savings'] )
									);
									?>
								</p>
								<a href="<?php echo esc_url( $wt_pklist_os_bundle['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-pklist-os-btn-bundle">
									<?php esc_html_e( 'View Bundle', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>
								</a>
							</div>
							<?php if ( ! empty( $wt_pklist_os_bundle['illustration'] ) ) : ?>
								<div class="wt-pklist-os-bundle-illustration">
									<img src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_bundle['illustration'] ); ?>"
										alt="<?php echo esc_attr( $wt_pklist_os_bundle['title'] ); ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php /* -- Standalone card -- */ ?>
					<?php
					if ( ! empty( $wt_pklist_os_cat['standalone'] ) ) :
						$wt_pklist_os_solo = $wt_pklist_os_cat['standalone'];
						$wt_pklist_os_cta  = ! empty( $wt_pklist_os_solo['cta_label'] )
							? $wt_pklist_os_solo['cta_label']
							: __( 'Get premium', 'print-invoices-packing-slip-labels-for-woocommerce' );
						?>
						<div class="wt-pklist-os-standalone">
							<div class="wt-pklist-os-standalone-content">
								<div class="wt-pklist-os-standalone-header">
									<img class="wt-pklist-os-standalone-icon"
										src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_solo['icon'] ); ?>"
										alt="<?php echo esc_attr( $wt_pklist_os_solo['name'] ); ?>">
									<h3 class="wt-pklist-os-standalone-name"><?php echo esc_html( $wt_pklist_os_solo['name'] ); ?></h3>
								</div>
								<p class="wt-pklist-os-standalone-desc"><?php echo esc_html( $wt_pklist_os_solo['desc'] ); ?></p>
								<a href="<?php echo esc_url( $wt_pklist_os_solo['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-pklist-os-btn-premium wt-pklist-os-btn-premium--block">
									<?php if ( empty( $wt_pklist_os_solo['cta_label'] ) ) : ?>
										<?php /* The star marks a premium upsell; a custom CTA is not one. */ ?>
										<span class="wt-pklist-os-btn-star" aria-hidden="true">&#9733;</span>
									<?php endif; ?>
									<?php echo esc_html( $wt_pklist_os_cta ); ?>
								</a>
							</div>
							<?php if ( ! empty( $wt_pklist_os_solo['screenshot'] ) ) : ?>
								<div class="wt-pklist-os-standalone-screenshot">
									<img src="<?php echo esc_url( $wt_pklist_os_img . '/' . $wt_pklist_os_solo['screenshot'] ); ?>"
										alt="<?php echo esc_attr( $wt_pklist_os_solo['name'] ); ?>">
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
