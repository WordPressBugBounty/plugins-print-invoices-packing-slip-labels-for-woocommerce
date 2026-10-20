<?php
/**
 * Upgrade CTA card shown in the document settings sidebar.
 *
 * Expects: $cta_card_title (add-on name), $cta_card_logo (image URL), $cta_card_features (string[]), $cta_card_link (URL).
 *
 * @package Wf_Woocommerce_Packing_List
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wt-pklist-cta-card">
	<?php
	if ( Wt_Pklist_Common::is_bfcm_season() ) {
		?>
	<div class="wt-pklist-cta-card__deal">
		<span class="wt-pklist-cta-card__ribbon"><?php echo esc_html__( '30%', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?><br><?php echo esc_html__( 'OFF', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></span>
		<div>
			<p class="wt-pklist-cta-card__deal-title"><?php esc_html_e( 'BFCM Deal of the Year is Here!', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></p>
			<p class="wt-pklist-cta-card__deal-text"><?php esc_html_e( 'Grab huge offers on our premium plugins.', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></p>
		</div>
	</div>
		<?php
	}
	?>
	<div class="wt-pklist-cta-card__body">
		<div class="wt-pklist-cta-card__product">
			<img src="<?php echo esc_url( $cta_card_logo ); ?>" alt="">
			<h4><?php echo esc_html( $cta_card_title ); ?></h4>
		</div>
		<ul class="wt-pklist-cta-card__features">
			<?php foreach ( $cta_card_features as $wtpdf_cta_card_feature ) { ?>
			<li><?php echo esc_html( $wtpdf_cta_card_feature ); ?></li>
			<?php } ?>
		</ul>
		<button type="button" class="wt-pklist-cta-card__toggle" aria-expanded="false" data-more="<?php esc_attr_e( 'Show more', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>" data-less="<?php esc_attr_e( 'Show less', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>"><?php esc_html_e( 'Show more', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></button>
		<a class="wt-pklist-cta-card__button" href="<?php echo esc_url( $cta_card_link ); ?>" target="_blank"><?php esc_html_e( 'View add-on', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?> <span aria-hidden="true">&rarr;</span></a>
		<div class="wt-pklist-cta-card__trust">
			<span class="wt-pklist-cta-card__trust-icon wt-pklist-cta-card__trust-icon--shield" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v5c0 4.5-3 8.5-7 10-4-1.5-7-5.5-7-10V6l7-3z"/><path d="M9 12l2 2 4-4"/></svg></span>
			<p>
			<?php
				printf(
					// translators: %s: "30-day money back guarantee" in bold.
					esc_html__( 'You are covered by our %s', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					'<strong>' . esc_html__( '30-day money back guarantee', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</strong>'
				);
			?>
			</p>
		</div>
		<div class="wt-pklist-cta-card__trust">
			<span class="wt-pklist-cta-card__trust-icon wt-pklist-cta-card__trust-icon--star" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><path d="M12 3.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8-4.3-4.1 5.9-.9L12 3.5z"/></svg></span>
			<p>
			<?php
				printf(
					// translators: %s: "99% customer satisfaction score" in bold.
					esc_html__( 'Supported by a team with %s', 'print-invoices-packing-slip-labels-for-woocommerce' ),
					'<strong>' . esc_html__( '99% customer satisfaction score', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</strong>'
				);
			?>
			</p>
		</div>
	</div>
</div>
