<?php
// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals
if (!defined('ABSPATH')) {
    exit;
}
$wf_admin_img_path=WF_PKLIST_PLUGIN_URL . 'admin/images';
$tab_items=array(
    "general"=>__("General", 'print-invoices-packing-slip-labels-for-woocommerce'),
);
$show_qrcode_placeholder = apply_filters('wt_pklist_show_qrcode_placeholder_in_template',false,$this->module_base);
if(!$show_qrcode_placeholder){
    $tab_items['qrcode_promote'] = '<div style="display:flex;">QR Code<img src="'.$wf_admin_img_path.'/promote_crown.png" style="width: 12px;height: 12px;background: #FFA800;padding: 5px;margin-left: 4px;border-radius: 25px;"></div>';
}
$tab_items = apply_filters('wt_pklist_add_additional_tab_item_into_module',$tab_items,$this->module_base,$this->module_id);
$pro_installed = true;
$pro_invoice_path = 'wt-woocommerce-invoice-addon/wt-woocommerce-invoice-addon.php';
if(!is_plugin_active($pro_invoice_path)){
    $pro_installed = false;
    $invoice_pro_feature_list = array(
        __("Multiple premium invoice templates to choose from","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Customize invoice numbering with automatic reset rules","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Add custom data like product meta, order meta, attributes, etc","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Enable customers to Pay Later at checkout","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Collect payments with a payment link on the invoice","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Show different taxes in separate columns","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Display VAT, GST & tax details on invoices","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Group products by category","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Sort order items in the product table","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Show variation data for variable products","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Multiple display formats for bundled products","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Generate packing slips and credit notes","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Back up invoices automatically to Google Drive, Dropbox, or FTP/SFTP","print-invoices-packing-slip-labels-for-woocommerce"),
        __("Enable remote printing with PrintNode integration","print-invoices-packing-slip-labels-for-woocommerce"),
    );
    ?>
<style type="text/css">
.wf-tab-head{width: 66%;}
</style>
    <?php
}
?>
<div class="wt_wrap">
    <div class="wt_heading_section">
        <h2 class="wp-heading-inline">
        <?php esc_html_e('Settings','print-invoices-packing-slip-labels-for-woocommerce');?>: <?php esc_html_e('Invoice','print-invoices-packing-slip-labels-for-woocommerce');?>
        </h2>
         <?php
            //webtoffee branding
            include WF_PKLIST_PLUGIN_PATH.'/admin/views/admin-settings-branding.php';
        ?>
    </div>
    <?php
    if(false === $pro_installed){
        $sidebar_pro_link = 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=free_plugin_sidebar&utm_medium=pdf_basic&utm_campaign=PDF_invoice&utm_content='.WF_PKLIST_VERSION;
    ?>
    <div style="position:relative;">
        <div class="wt_pro_addon_tile_doc wt-pklist-cta-tile" style="<?php echo is_rtl() ? 'left:0;' : 'right:0;'; ?>">
            <?php
            $cta_card_title    = __( 'PDF Invoices, Packing Slips, & Credit Notes', 'print-invoices-packing-slip-labels-for-woocommerce' );
            $cta_card_logo     = WF_PKLIST_PLUGIN_URL . 'admin/images/wt_ipc_logo.png';
            $cta_card_features = $invoice_pro_feature_list;
            $cta_card_link     = $sidebar_pro_link;
            include WF_PKLIST_PLUGIN_PATH . 'admin/views/pro-cta-card.php';
            ?>
        </div>
    </div>
    <?php
    }
    ?>
    
    <div class="nav-tab-wrapper wp-clearfix wf-tab-head">
    	<?php Wf_Woocommerce_Packing_List::generate_settings_tabhead($tab_items, 'module'); ?>
    </div>
    <div class="wf-tab-container">
    	<?php
    		foreach($tab_items as $target_id => $tab_item){
    			$settings_view=plugin_dir_path( __FILE__ ).$target_id.'.php';
                if(file_exists($settings_view))
                {
                    include $settings_view;
                }
    		}
    	?>
    	<!-- add additional tab view pages -->
    	<?php do_action('wt_pklist_add_additional_tab_content_into_module',$this->module_base,$this->module_id); ?>
        <?php do_action('wf_pklist_module_out_settings_form',array(
            'module_id'=>$this->module_base
        ));?>
        <?php include_once WF_PKLIST_PLUGIN_PATH . 'admin/views/customizer-promotion-popup.php'; ?>
    </div>
</div>
