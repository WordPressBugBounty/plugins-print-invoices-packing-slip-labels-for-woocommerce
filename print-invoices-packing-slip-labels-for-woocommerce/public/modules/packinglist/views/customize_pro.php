<?php
if (!defined('ABSPATH')) {
	exit;
}

function wt_pklist_get_dummy_data() {
	return array(
		'[wfte_order_number]'     => '123456',
		'[wfte_order_date]'       => wp_date('m-d-Y'),
		'[wfte_invoice_number]'   => '123456',
		'[wfte_invoice_date]'     => wp_date('m-d-Y'),
		'[wfte_billing_address]'  => 'Billing address name<br>20 Maple Avenue<br>San Pedro<br>California<br>United States (US)<br>90731',
		'[wfte_shipping_address]' => 'Shipping address name<br>20 Maple Avenue<br>San Pedro<br>California<br>United States (US)<br>90731',
		'[wfte_email]'            => 'info@example.com',
		'[wfte_tel]'              => '+1 123 456',
		'[wfte_shipping_method]'  => 'DHL',
		'[wfte_tracking_number]'  => '123456',
		'[wfte_ssn_number]'       => 'SSN123456',
		'[wfte_vat_number]'       => '123456',
		'[wfte_customer_note]'    => '',
		'[wfte_order_item_meta]'  => '',
		'[wfte_extra_fields]'     => '',
		'[wfte_weight]'           => '2 kg',
		'[wfte_return_policy]'    => '',
		'[wfte_product_table_start]' => '',
		'[wfte_product_table_end]'   => '',
	);
}

function wt_pklist_build_preview_html($template_type) {
	$template_file = WF_PKLIST_PLUGIN_PATH . 'public/modules/packinglist/data/data.template1.php';
	if (!file_exists($template_file)) {
		return '';
	}

	$html = html_entity_decode(stripslashes(file_get_contents($template_file)));
	// phpcs:ignore WordPress.WP.I18n.NonSingularStringLiteralText -- Dynamic translation strings from template file
	$html = preg_replace_callback('/__\[(.*?)\]__/s', fn($m) => isset($m[1]) && trim($m[1]) ? __($m[1], 'print-invoices-packing-slip-labels-for-woocommerce') : '', $html);

	$options = Wf_Woocommerce_Packing_List::get_settings();
	$module_opts = Wf_Woocommerce_Packing_List::get_settings(Wf_Woocommerce_Packing_List::get_module_id($template_type));
	
	$logo_url = $module_opts['woocommerce_wf_packinglist_logo'] ?? $options['woocommerce_wf_packinglist_logo'] ?? '';
	if (empty($logo_url)) {
		$logo_url = WF_PKLIST_PLUGIN_URL . 'admin/modules/customizer/assets/images/logo_dummy.png';
	}

	// From address
	$countries = WC()->countries;
	$country_arr = explode(':', $options['wf_country'] ?? '');
	$country_code = $country_arr[0] ?? '';
	$state = $country_arr[1] ?? '';
	
	$from_parts = array_filter(array(
		$options['woocommerce_wf_packinglist_sender_name'] ?? '',
		$options['woocommerce_wf_packinglist_sender_address_line1'] ?? '',
		$options['woocommerce_wf_packinglist_sender_address_line2'] ?? '',
		$options['woocommerce_wf_packinglist_sender_city'] ?? '',
		$countries->states[$country_code][$state] ?? $state,
		$countries->countries[$country_code] ?? '',
		$options['woocommerce_wf_packinglist_sender_postalcode'] ?? '',
		$options['woocommerce_wf_packinglist_sender_contact_number'] ?? '',
		$options['woocommerce_wf_packinglist_sender_vat'] ?? '',
	));

	$footer = Wf_Woocommerce_Packing_List::get_option('woocommerce_wf_packinglist_footer', Wf_Woocommerce_Packing_List::get_module_id($template_type));
	if (!$footer) {
		$footer = Wf_Woocommerce_Packing_List::get_option('woocommerce_wf_packinglist_footer');
	}

	$find_replace = array_merge(wt_pklist_get_dummy_data(), array(
		'[wfte_company_logo_url]' => $logo_url,
		'[wfte_company_name]'     => $options['woocommerce_wf_packinglist_companyname'] ?? '',
		'[wfte_from_address]'     => implode('<br />', $from_parts),
		'[wfte_footer]'           => $footer ? nl2br($footer) : '',
	));

	$html = str_replace(array_keys($find_replace), array_values($find_replace), $html);

	// product row
	$dummy_row = '<tr>
		<td class="serial_no_td wfte_product_table_body_column">1</td>
		<td class="image_td wfte_product_table_body_column"><img src="' . esc_url(WF_PKLIST_PLUGIN_URL . 'admin/modules/customizer/assets/images/thumbnail-preview.png') . '" style="max-width:50px; max-height:50px; border-radius:25%;" /></td>
		<td class="sku_td wfte_product_table_body_column">A1234</td>
		<td class="product_td wfte_product_table_body_column">Jumbing LED Light Wall Ball</td>
		<td class="quantity_td wfte_product_table_body_column wfte_text_center">5</td>
		<td class="total_weight_td wfte_product_table_body_column">2 kg</td>
	</tr>';
	$html = preg_replace('/<tbody([^>]*)>(\s*)<\/tbody>/s', '<tbody$1>' . $dummy_row . '</tbody>', $html);

	$html = preg_replace(array('/<style[^>]*>.*?<\/style>/s', '/<!--.*?-->/s'), '', $html);

	return $html;
}

$template_type = 'packinglist';
$template_html = wt_pklist_build_preview_html($template_type);

$premium_features = array(
	'shipping_address' => array('label' => __('Shipping address', 'print-invoices-packing-slip-labels-for-woocommerce'), 'element' => 'shipping_address', 'default' => true),
	'sku'              => array('label' => __('SKU', 'print-invoices-packing-slip-labels-for-woocommerce'), 'element' => 'product_table_head_sku|sku_td', 'default' => false),
	'total_weight'     => array('label' => __('Total weight', 'print-invoices-packing-slip-labels-for-woocommerce'), 'element' => 'product_table_head_total_weight|total_weight_td', 'default' => false),
	'ssn'              => array('label' => __('SSN', 'print-invoices-packing-slip-labels-for-woocommerce'), 'element' => 'ssn_number', 'default' => false),
	'vat'              => array('label' => __('VAT', 'print-invoices-packing-slip-labels-for-woocommerce'), 'element' => 'vat_number', 'default' => false),
);

$sidebar_pro_link = 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=free_plugin_sidebar&utm_medium=pdf_basic&utm_campaign=PDF_invoice&utm_content=' . WF_PKLIST_VERSION;
?>

<div class="wf-tab-content" data-id="<?php echo esc_attr($target_id); ?>">
	<div class="wt_pklist_customize_pro_wrapper">
		<div class="wt_pklist_customize_pro_left">
			<div class="wt_pklist_customize_pro_header">
				<h2><?php esc_html_e('Your current packing slip', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></h2>
				<p><?php esc_html_e('How your packing slip will appear to customers', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></p>
			</div>
			<div class="wt_pklist_template_preview_container">
				<div class="wt_pklist_template_preview_inner" id="wt_packinglist_preview">
					<?php if (!empty($template_html)) : ?>
						<?php echo $template_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					<?php else : ?>
						<img src="<?php echo esc_url(WF_PKLIST_PLUGIN_URL . 'assets/images/packingslip-sample.svg'); ?>" alt="<?php esc_attr_e('Packing Slip Preview', 'print-invoices-packing-slip-labels-for-woocommerce'); ?>" style="max-width: 100%; height: auto;">
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		<div class="wt_pklist_customize_pro_right">
			<?php if (false === $pro_installed) : ?>
			<div class="wt_pklist_premium_features_panel">
				<div class="wt_pklist_premium_features_header">
					<img src="<?php echo esc_url(WF_PKLIST_PLUGIN_URL . 'assets/images/Crown.png'); ?>" class="crown-icon" alt="">
					<h3><?php esc_html_e('Premium features', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></h3>
				</div>
				<p class="wt_pklist_premium_features_desc"><?php esc_html_e('Toggle the pro features on and off to see how they transform your packing slip', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></p>
				
				<?php foreach ($premium_features as $key => $config) : ?>
				<div class="wt_pklist_toggle_item">
					<span class="wt_pklist_toggle_label"><?php echo esc_html($config['label']); ?></span>
					<label class="wt_pklist_toggle_switch">
						<input type="checkbox" class="wt_pklist_feature_toggle" data-target-element="<?php echo esc_attr($config['element']); ?>" <?php checked($config['default'], true); ?>>
						<span class="wt_pklist_toggle_slider"></span>
					</label>
				</div>
				<?php endforeach; ?>

				<div class="wt_pklist_unlock_panel">
					<div class="wt_pklist_unlock_header">
						<svg class="lock-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="#1e1e1e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="#1e1e1e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<h3><?php esc_html_e('Unlock full customization', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></h3>
					</div>
					<p class="wt_pklist_unlock_desc"><?php esc_html_e('Design packing slips that match your brand', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></p>
					<ul class="wt_pklist_unlock_features">
						<li><?php esc_html_e('Advanced packing slip templates', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></li>
						<li><?php esc_html_e('Show, hide, rearrange fields', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></li>
						<li><?php esc_html_e('Add additional data such as product meta, order meta, product attributes etc', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></li>
						<li><?php esc_html_e('Group and sort product table based on different conditions', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></li>
						<li><?php esc_html_e('Many more customization options', 'print-invoices-packing-slip-labels-for-woocommerce'); ?></li>
					</ul>
					<a href="<?php echo esc_url($sidebar_pro_link); ?>" target="_blank" class="wt_pklist_unlock_btn">
						<img src="<?php echo esc_url(WF_PKLIST_PLUGIN_URL . 'assets/images/Crown.png'); ?>" alt="">
						<?php esc_html_e('Upgrade To Premium', 'print-invoices-packing-slip-labels-for-woocommerce'); ?>
					</a>
				</div>
			</div>
			
			<?php endif; ?>
		</div>
	</div>
</div>
<?php do_action('wf_pklist_document_out_settings_form'); ?>
