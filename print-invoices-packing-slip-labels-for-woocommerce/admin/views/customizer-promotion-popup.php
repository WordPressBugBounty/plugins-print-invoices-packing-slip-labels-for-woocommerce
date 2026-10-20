<?php
// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals
if (!defined('ABSPATH')) {
	exit;
}
if ( isset( $template_type ) && !empty( $template_type ) ) {
?>
<style type="text/css">
/* popup - Customizer promotion popup */
.wt_pklist_customizer_promotion_header{ float: left; width: 100%; position: relative; }
.wt_pklist_customizer_promotion_header .wf_pklist_popup_close{ position: absolute; right: 0; padding: 0 15px;}
.wt_pklist_customizer_promotion_content{width: 70%; margin: auto;margin-top: 30px;}
.wt_pklist_customizer_promotion_content_title p{ font-style: normal; font-weight: 600; font-size: 15px; line-height: 140.69%; text-align: center; color: #000000; }
.wt_pklist_customizer_promotion_content_title p span{color: #3171FB;}
.wt_pklist_customizer_promotion_content_list{ display: flex; flex-direction: column; text-align: left; font-style: normal; font-weight: 400; font-size: 13px; line-height: 160.7%; color: #000000; }
.wt_pklist_customizer_promotion_content_list_row{ display: flex; flex-direction: row; justify-content: space-evenly; margin: auto;}
.wt_pklist_customizer_promotion_footer{ width: 100%; display: flex; justify-content: center; margin: 20px 0 35px; }
.wt_pklist_customizer_promotion_footer a { background: #1DA5F8; font-style: normal; font-weight: 600; font-size: 14px; line-height: 140.69%; color: #FFFFFF; padding:11px 35px; border-radius: 6px; text-decoration: none; }
.wt_pklist_customizer_promotion_content_list_bordered { border: 2px solid #3171FB; border-radius: 6px; padding: 8px 16px; }
<?php
if ( $template_type === 'packinglist' ) {
?>
.wt_pklist_promo_ps { box-sizing: border-box; width: 520px; padding: 0; border: 0; border-radius: 16px; box-shadow: 0 12px 40px rgba(16, 24, 40, 0.18); text-align: left; font-family: Inter, Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
.wt_pklist_promo_ps *, .wt_pklist_promo_ps *::before { box-sizing: border-box; }
.wt_pklist_promo_ps .wf_pklist_popup_close { position: absolute; top: -12px; right: -12px; display: flex; align-items: center; justify-content: center; float: none; width: 30px; height: 30px; padding: 0; line-height: 1; background: #fff; border: 1px solid #E5E7EB; border-radius: 50%; box-shadow: 0 2px 8px rgba(16, 24, 40, 0.12); z-index: 2; }
.wt_pklist_promo_ps__main { padding: 22px 24px 20px; }
.wt_pklist_promo_ps__head { display: flex; align-items: center; gap: 14px; padding: 10px 14px; background: #F7F8FA; border: 1px solid #E5E7EB; border-radius: 12px; }
.wt_pklist_promo_ps__crown { flex: 0 0 auto; display: flex; align-items: center; justify-content: center; width: 58px; height: 46px; background: #fff; border-radius: 8px; }
.wt_pklist_promo_ps__crown img { width: 36px; height: auto; }
.wt_pklist_promo_ps__title { max-width: 320px; margin: 0; color: #111827; font-size: 17px; font-weight: 600; line-height: 1.4; }
.wt_pklist_promo_ps__unlock { margin: 18px 0 8px; color: #111827; font-size: 14px; font-weight: 600; }
.wt_pklist_promo_ps__features { margin: 0; padding: 0; list-style: none; }
.wt_pklist_promo_ps__features li { display: flex; align-items: center; gap: 12px; margin: 0 0 7px; padding: 8px 14px; border: 1px solid #E5E7EB; border-radius: 12px; color: #374151; font-size: 13px; font-weight: 500; line-height: 1.5; }
.wt_pklist_promo_ps__features li:last-child { margin-bottom: 0; }
.wt_pklist_promo_ps__tick { flex: 0 0 auto; display: flex; align-items: center; justify-content: center; width: 22px; height: 22px; background: #EBFAF0; border-radius: 50%; }
.wt_pklist_promo_ps__cta { padding: 16px 24px; border-top: 1px solid #E5E7EB; }
.wt_pklist_promo_ps__cta a, .wt_pklist_promo_ps__cta a:visited { display: flex; align-items: center; justify-content: center; height: 44px; background: #3B6CF6; border-radius: 10px; color: #fff; font-size: 15px; font-weight: 600; text-decoration: none; }
.wt_pklist_promo_ps__cta a:hover, .wt_pklist_promo_ps__cta a:focus { background: #2F58D6; color: #fff; }
.wt_pklist_promo_ps__deal { display: flex; align-items: center; gap: 14px; padding: 14px 20px 16px; border-top: 1px solid #E5E7EB; }
.wt_pklist_promo_ps__deal-badge { flex: 0 0 auto; display: flex; flex-direction: column; align-items: center; justify-content: center; width: 44px; height: 40px; background: #EF5466; border-radius: 8px; color: #fff; font-size: 13px; font-weight: 700; line-height: 1.05; }
.wt_pklist_promo_ps__deal-badge small { font-size: 10px; font-weight: 600; }
.wt_pklist_promo_ps__deal p { margin: 0; color: #374151; font-size: 12px; line-height: 1.6; }
.wt_pklist_promo_ps__deal strong { color: #EF5466; font-weight: 600; }
<?php
} else {
?>
.wt_pklist_customizer_promotion_content_list_row{width: 80%;}
.wt_pklist_customizer_promotion_content_list_row p{width: 40%; margin: 0.5em;}

/* ── v2 popup: fixed width, two-column layout ── */
.wt_pklist_customizer_promo_v2 {
	box-sizing: border-box;
	width: 540px !important;
	overflow: hidden;
	text-align: left;
	padding: 0 !important;
	position: fixed;
	border: 0;
	border-radius: 20px;
	box-shadow: 0 12px 40px rgba(16, 24, 40, 0.18);
	font-family: Inter, Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}
/* suppress the floated header row entirely — we position the X ourselves */
.wt_pklist_customizer_promo_v2 .wt_pklist_customizer_promotion_header {
	float: none !important;
	width: auto !important;
	height: 0;
	position: static;
}
.wt_pklist_customizer_promo_v2 .wf_pklist_popup_close {
	position: absolute !important;
	top: 22px !important;
	right: 24px !important;
	float: none !important;
	width: auto !important;
	height: auto !important;
	line-height: 1 !important;
	padding: 0 !important;
	z-index: 20;
	cursor: pointer;
}
/* two-column flex wrapper */
.wt_pklist_promo_v2_inner {
	display: grid;
	grid-template-columns: 60% 40%;
	grid-template-rows: auto 1fr;
	min-height: 380px;
	position: relative;
	overflow: hidden;
}
/* the light blue title band runs across both columns, at whatever height the title needs */
.wt_pklist_promo_v2_inner::before {
	content: "";
	grid-column: 2;
	grid-row: 1;
	background: #F2F9FF;
}
/* LEFT column — 60% */
.wt_pklist_promo_v2_left {
	display: contents;
}
/* top area: light blue, title */
.wt_pklist_promo_v2_top {
	background: #F2F9FF;
	box-sizing: border-box;
	grid-column: 1;
	grid-row: 1;
	min-height: 155px;
	padding: 30px 20px 24px 32px;
}
.wt_pklist_promo_v2_title {
	font-size: 22px;
	font-weight: 700;
	line-height: 1.5;
	color: #111111;
	margin: 0;
	padding: 0;
	text-align: left;
}
.wt_pklist_promo_v2_title span { color: #3B6CF6; }
/* bottom area: white, features + button */
.wt_pklist_promo_v2_bottom {
	background: #ffffff;
	grid-column: 1;
	grid-row: 2;
	padding: 18px 20px 28px 32px;
}
.wt_pklist_promo_v2_features {
	list-style: none;
	margin: 0 0 20px;
	padding: 0;
}
.wt_pklist_promo_v2_features li {
	display: flex;
	align-items: center;
	gap: 16px;
	font-size: 15px;
	font-weight: 400;
	color: #111111;
	padding: 9px 0;
}
.wt_pklist_promo_v2_features li svg { flex-shrink: 0; }
.wt_pklist_promo_v2_btn {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 8px;
	box-sizing: border-box;
	width: 252px;
	height: 44px;
	background: #3B6CF6;
	color: #ffffff;
	font-weight: 500;
	font-size: 16px;
	text-decoration: none;
	padding: 0 16px;
	border-radius: 12px;
}
.wt_pklist_promo_v2_btn:hover, .wt_pklist_promo_v2_btn:focus { background: #2F58D6; color: #ffffff; }
.wt_pklist_promo_v2_btn img { width: 16px; height: 14px; }
/* RIGHT column — 40%, top matches title bg, bottom matches features bg */
.wt_pklist_promo_v2_right {
	grid-column: 2;
	grid-row: 1 / span 2;
	z-index: 1;
	position: relative;
	overflow: visible;
}
.wt_pklist_promo_v2_deal { display: flex; align-items: center; gap: 14px; padding: 16px 14px 18px 20px; background: #F7F8FA; border-top: 1px solid #E5E7EB; }
.wt_pklist_promo_v2_deal-badge { flex: 0 0 auto; display: flex; flex-direction: column; align-items: center; justify-content: center; width: 50px; height: 44px; background: #EF5466; border-radius: 8px; color: #fff; font-size: 14px; font-weight: 700; line-height: 1.05; }
.wt_pklist_promo_v2_deal-badge small { font-size: 10px; font-weight: 600; }
.wt_pklist_promo_v2_deal p { margin: 0; color: #374151; font-size: 13px; line-height: 1.6; }
.wt_pklist_promo_v2_deal strong { color: #EF5466; font-weight: 600; }
.wt_pklist_promo_v2_right img {
	position: absolute;
	top: 52px;
	left: -34px;
	width: 290px;
	height: 396px;
	display: block;
}
<?php
}
?>
</style>
<!-- Customizer promotion popup for invoice, packing slip and shipping label -->
<?php
	$customizer_promotion_content = array(
		'invoice' => array(
			/* translators: %s: highlighted phrase */
			'title' 	=> sprintf( __( 'Unlock %s with PDF Invoice Pro', 'print-invoices-packing-slip-labels-for-woocommerce' ), '<span>' . __( 'Advanced Customization', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</span>' ),
			'features' 	=> array(
				__('Add additional fields to invoices', 'print-invoices-packing-slip-labels-for-woocommerce'),
				__('Customize using Code Editor','print-invoices-packing-slip-labels-for-woocommerce'),
				__('Multiple pre-built templates','print-invoices-packing-slip-labels-for-woocommerce'),
				__('More customization options', 'print-invoices-packing-slip-labels-for-woocommerce')
			),
			'link'		=> 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=free_plugin_customizesection&utm_medium=pdf_basic&utm_campaign=PDF_invoice&utm_content='.WF_PKLIST_VERSION,
		),

		'packinglist' => array(
			'title' 	=> __( 'Upgrade for more customization on packing slip', 'print-invoices-packing-slip-labels-for-woocommerce' ),
			'features' 	=> array(
				__('Advanced customization option for packing slip templates', 'print-invoices-packing-slip-labels-for-woocommerce'),
				__('Show/hide fields like billing address, weight, product image etc','print-invoices-packing-slip-labels-for-woocommerce'),
				__('Add additional data such as product meta, order meta, product attributes etc','print-invoices-packing-slip-labels-for-woocommerce'),
				__('Group and sort product table based on different conditions', 'print-invoices-packing-slip-labels-for-woocommerce'),
				__('Many more customization options', 'print-invoices-packing-slip-labels-for-woocommerce')
			),
			'link'		=> 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=free_plugin_packingslip_menu&utm_medium=pdf_basic&utm_campaign=PDF_invoice&utm_content='.WF_PKLIST_VERSION,
		),

		'shippinglabel' => array(
			/* translators: %s: highlighted phrase */
			'title' 	=> sprintf( __( 'Get <span>%s</span> options for shipping labels, dispatch labels, and delivery notes', 'print-invoices-packing-slip-labels-for-woocommerce' ), __( 'advanced customization', 'print-invoices-packing-slip-labels-for-woocommerce' ) ),
			'features' 	=> array(
				__('Add additional fields to shipping labels', 'print-invoices-packing-slip-labels-for-woocommerce'),
				__('Customize using Code Editor','print-invoices-packing-slip-labels-for-woocommerce'),
				__('Multiple pre-built templates','print-invoices-packing-slip-labels-for-woocommerce'),
				__('More customization options', 'print-invoices-packing-slip-labels-for-woocommerce'),
			),
			'link'		=> 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=free_plugin_customizesection&utm_medium=pdf_basic&utm_campaign=Shipping_Label&utm_content='.WF_PKLIST_VERSION,
		),

		'deliverynote' => array(
			/* translators: %s: highlighted phrase */
			'title' 	=> sprintf( __( 'Get <span>%s</span> options for shipping labels, dispatch labels, and delivery notes', 'print-invoices-packing-slip-labels-for-woocommerce' ), __( 'advanced customization', 'print-invoices-packing-slip-labels-for-woocommerce' ) ),
			'features' 	=> array(
				__('Add additional fields to shipping labels', 'print-invoices-packing-slip-labels-for-woocommerce'),
				__('Customize using Code Editor','print-invoices-packing-slip-labels-for-woocommerce'),
				__('Multiple pre-built templates','print-invoices-packing-slip-labels-for-woocommerce'),
				__('More customization options', 'print-invoices-packing-slip-labels-for-woocommerce'),
			),
			'link'		=> 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=free_plugin_customizesection&utm_medium=pdf_basic&utm_campaign=Shipping_Label&utm_content='.WF_PKLIST_VERSION,
		),

		'dispatchlabel' => array(
			/* translators: %s: highlighted phrase */
			'title' 	=> sprintf( __( 'Get <span>%s</span> options for shipping labels, dispatch labels, and delivery notes', 'print-invoices-packing-slip-labels-for-woocommerce' ), __( 'advanced customization', 'print-invoices-packing-slip-labels-for-woocommerce' ) ),
			'features' 	=> array(
				__('Add additional fields to shipping labels', 'print-invoices-packing-slip-labels-for-woocommerce'),
				__('Customize using Code Editor','print-invoices-packing-slip-labels-for-woocommerce'),
				__('Multiple pre-built templates','print-invoices-packing-slip-labels-for-woocommerce'),
				__('More customization options', 'print-invoices-packing-slip-labels-for-woocommerce'),
			),
			'link'		=> 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=free_plugin_customizesection&utm_medium=pdf_basic&utm_campaign=Shipping_Label&utm_content='.WF_PKLIST_VERSION,
		),
	);
	$is_pro_customizer = apply_filters('wt_pklist_pro_customizer_'.$template_type,false,$template_type);
	if ( false === $is_pro_customizer && isset( $customizer_promotion_content[$template_type] ) ) {

	if ( 'packinglist' === $template_type ) {
	?>
	<div class="wt_pklist_customizer_promotion wf_pklist_popup wt_pklist_promo_ps">
		<div class="wf_pklist_popup_close" aria-label="<?php esc_attr_e( 'Close', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>">
			<svg width="12" height="12" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 1L10 10" stroke="#374151" stroke-width="1.4" stroke-linecap="round"/>
				<path d="M10 1L1 10" stroke="#374151" stroke-width="1.4" stroke-linecap="round"/>
			</svg>
		</div>
		<div class="wt_pklist_promo_ps__main">
			<div class="wt_pklist_promo_ps__head">
				<span class="wt_pklist_promo_ps__crown"><img src="<?php echo esc_url( WF_PKLIST_PLUGIN_URL . 'assets/images/promotion_crown.png' ); ?>" alt=""></span>
				<p class="wt_pklist_promo_ps__title"><?php echo wp_kses_post( $customizer_promotion_content[ $template_type ]['title'] ); ?></p>
			</div>
			<p class="wt_pklist_promo_ps__unlock"><?php esc_html_e( 'What you’ll unlock', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></p>
			<ul class="wt_pklist_promo_ps__features">
				<?php foreach ( $customizer_promotion_content[ $template_type ]['features'] as $point ) { ?>
				<li><span class="wt_pklist_promo_ps__tick"><svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 5L4.5 8L10.5 2" stroke="#22A55B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span><?php echo esc_html( $point ); ?></li>
				<?php } ?>
			</ul>
		</div>
		<div class="wt_pklist_promo_ps__cta">
			<a href="<?php echo esc_url( $customizer_promotion_content[ $template_type ]['link'] ); ?>" class="wt_pklist_customizer_promotion_premium_btn" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></a>
		</div>
		<?php
		if ( Wt_Pklist_Common::is_bfcm_season() ) {
			?>
		<div class="wt_pklist_promo_ps__deal">
			<span class="wt_pklist_promo_ps__deal-badge"><?php echo esc_html__( '30%', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?><small><?php echo esc_html__( 'OFF', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></small></span>
			<p>
			<?php
				printf(
					// translators: 1: "Black Friday and Cyber Monday" in bold, 2: "30%" in bold.
					esc_html__( 'Get huge savings this %1$s with WebToffee! Grab any of our premium plugins at an exclusive %2$s discount.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					'<strong>' . esc_html__( 'Black Friday and Cyber Monday', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</strong>',
					'<strong>' . esc_html__( '30%', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</strong>'
				);
			?>
			</p>
		</div>
			<?php
		}
		?>
	</div>
	<?php
	} else {
	/* v2 design — invoice, shippinglabel, deliverynote, dispatchlabel */
	?>
	<div class="wt_pklist_customizer_promotion wf_pklist_popup wt_pklist_customizer_promo_v2">
		<!-- close button: absolutely positioned top-right, keeps wf_pklist_popup_close class for JS handler -->
		<div class="wt_pklist_customizer_promotion_header">
			<div class="wf_pklist_popup_close">
				<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L10 10" stroke="#333"/>
					<path d="M10 1L1 10" stroke="#333"/>
				</svg>
			</div>
		</div>
		<!-- two-column inner layout -->
		<div class="wt_pklist_promo_v2_inner">
			<!-- LEFT column -->
			<div class="wt_pklist_promo_v2_left">
				<!-- top: title on light blue background -->
				<div class="wt_pklist_promo_v2_top">
					<p class="wt_pklist_promo_v2_title">
						<?php echo wp_kses_post( $customizer_promotion_content[$template_type]['title'] ); ?>
					</p>
				</div>
				<!-- bottom: features + button on white -->
				<div class="wt_pklist_promo_v2_bottom">
					<ul class="wt_pklist_promo_v2_features">
						<?php foreach ( $customizer_promotion_content[$template_type]['features'] as $point ) { ?>
						<li>
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="10" fill="#4CAF50"/><path d="M5.5 10L8.5 13L14.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<?php echo esc_html( $point ); ?>
						</li>
						<?php } ?>
					</ul>
					<a href="<?php echo esc_url( $customizer_promotion_content[$template_type]['link'] ); ?>" class="wt_pklist_promo_v2_btn" target="_blank">
						<img src="<?php echo esc_url( WF_PKLIST_PLUGIN_URL . 'admin/images/white-crown.svg' ); ?>" alt="">
						<?php echo esc_html__( 'Upgrade to Premium', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>
					</a>
				</div>
			</div>
			<!-- RIGHT column: SVG illustration, overflows right edge -->
			<div class="wt_pklist_promo_v2_right">
				<img src="<?php echo esc_url( WF_PKLIST_PLUGIN_URL . 'admin/images/customizer-preview.svg' ); ?>" alt=""<?php echo ( 'invoice' === $template_type ) ? ' style="height:360px;"' : ''; ?>>
			</div>
		</div>
		<?php
		if ( Wt_Pklist_Common::is_bfcm_season() ) {
			?>
		<div class="wt_pklist_promo_v2_deal">
			<span class="wt_pklist_promo_v2_deal-badge"><?php echo esc_html__( '30%', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?><small><?php echo esc_html__( 'OFF', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></small></span>
			<p>
			<?php
				printf(
					// translators: 1: "Black Friday and Cyber Monday" in bold, 2: "30%" in bold.
					esc_html__( 'Get huge savings this %1$s with WebToffee! Grab any of our premium plugins at an exclusive %2$s discount.', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					'<strong>' . esc_html__( 'Black Friday and Cyber Monday', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</strong>',
					'<strong>' . esc_html__( '30%', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</strong>'
				);
			?>
			</p>
		</div>
			<?php
		}
		?>
	</div>
	<?php
	} // end else (v2 design)
		} // end of is_pro_customizer false and popup available for template type.
    }// end of isset of template_type.
	?>
