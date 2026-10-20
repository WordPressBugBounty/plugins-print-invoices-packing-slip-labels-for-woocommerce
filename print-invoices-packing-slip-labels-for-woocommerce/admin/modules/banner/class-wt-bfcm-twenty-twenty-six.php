<?php
/**
 * BFCM 2026 Banner.
 *
 * @package Wf_Woocommerce_Packing_List
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Wt_Bfcm_Twenty_Twenty_Six' ) ) {

	/**
	 * Class Wt_Bfcm_Twenty_Twenty_Six
	 *
	 * This class is responsible for displaying and handling the Black Friday and Cyber Monday CTA banners for 2026.
	 */
	class Wt_Bfcm_Twenty_Twenty_Six {

		/**
		 * Banner id.
		 *
		 * @var string
		 */
		private $banner_id = 'wt-bfcm-twenty-twenty-six';

		/**
		 * Banner state option name.
		 *
		 * @var string
		 */
		private static $banner_state_option_name = 'wt_bfcm_twenty_twenty_six_banner_state'; // Banner state, 1: Show, 2: Closed by user, 3: Clicked the grab button.

		/**
		 * Banner state.
		 *
		 * @var int
		 */
		private $banner_state = 1;

		/**
		 * Show banner.
		 *
		 * @var bool|null
		 */
		private static $show_banner = null;

		/**
		 * Ajax action name.
		 *
		 * @var string
		 */
		private static $ajax_action_name = 'wt_bcfm_twenty_twenty_six_banner_state';

		/**
		 * Promotion link.
		 *
		 * @var string
		 */
		private static $promotion_link = 'https://www.webtoffee.com/plugins/?utm_source=BFCM_accounting&utm_medium=invoice&utm_campaign=BFCM-Accounting';

		/**
		 * Banner version.
		 *
		 * @var string
		 */
		private static $banner_version = '';

		/**
		 * Constructor.
		 */
		public function __construct() {
			self::$banner_version = WF_PKLIST_VERSION; // Plugin version.

			$this->banner_state = get_option( self::$banner_state_option_name ); // Current state of the banner.
			$this->banner_state = absint( false === $this->banner_state ? 1 : $this->banner_state );

			// Enqueue styles.
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles_and_scripts' ) );

			// Add banner. Early priority so it sits above the other notices.
			add_action( 'admin_notices', array( $this, 'show_banner' ), 1 );

			// Ajax hook to save banner state.
			add_action( 'wp_ajax_' . self::$ajax_action_name, array( $this, 'update_banner_state' ) );
		}

		/**
		 * To add the banner styles
		 */
		public function enqueue_styles_and_scripts() {
			// Only enqueue if banner should be shown.
			if ( ! $this->is_show_banner() ) {
				return;
			}

			wp_enqueue_style( $this->banner_id . '-css', plugin_dir_url( __FILE__ ) . 'assets/css/wt-bfcm-twenty-twenty-six.css', array(), self::$banner_version, 'all' );
			$params = array(
				'ajax_url' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
				'nonce'    => wp_create_nonce( 'wt_bfcm_twenty_twenty_six_banner_nonce' ),
				'action'   => self::$ajax_action_name,
			);
			wp_enqueue_script( $this->banner_id . '-js', plugin_dir_url( __FILE__ ) . 'assets/js/wt-bfcm-twenty-twenty-six.js', array( 'jquery' ), self::$banner_version, false );
			wp_localize_script( $this->banner_id . '-js', 'wt_bfcm_twenty_twenty_six_banner_js_params', $params );
		}

		/**
		 * Show the banner.
		 */
		public function show_banner() {
			if ( $this->is_show_banner() ) {
				?>
					<div class="wt-bfcm-banner-2026 notice is-dismissible">
						<div class="wt-bfcm-banner-body">
							<div class="wt-bfcm-banner-body-img-section">
								<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/black-friday-2026.svg' ); ?>" alt="<?php esc_attr_e( 'Black Friday Cyber Monday 2026', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?>">
							</div>
							<div class="wt-bfcm-banner-body-info">
								<div class="wt-bfcm-never-miss-this-deal">
									<p><?php echo esc_html__( 'Never Miss This Deal', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?></p>
								</div>
								<div class="info">
									<p>
									<?php
										printf(
											// translators: 1: Discount text with span wrapper, e.g. <span>30% OFF</span>.
											esc_html__( 'Your Last Chance to Avail %1$s on WebToffee Plugins. Grab the deal before it\'s gone!', 'print-invoices-packing-slip-labels-for-woocommerce' ),
											'<span>30% ' . esc_html__( 'OFF', 'print-invoices-packing-slip-labels-for-woocommerce' ) . '</span>'
										);
									?>
									</p>
								</div>
								<div class="info-button">
									<a href="<?php echo esc_url( self::$promotion_link ); ?>" class="bfcm_cta_button" target="_blank"><?php echo esc_html__( 'View plugins', 'print-invoices-packing-slip-labels-for-woocommerce' ); ?> <span class="wt-bfcm-arrow" aria-hidden="true">&rarr;</span></a>
								</div>
							</div>
						</div>
					</div>
				<?php
			}
		}

		/**
		 * Check if the banner should be shown.
		 *
		 * @return bool
		 */
		public function is_show_banner() {
			$start_date   = new \DateTime( '11-NOV-2026, 12:00 AM', new \DateTimeZone( 'Asia/Kolkata' ) );
			$current_date = new \DateTime( 'now', new \DateTimeZone( 'Asia/Kolkata' ) );
			$end_date     = new \DateTime( '04-DEC-2026, 11:59 PM', new \DateTimeZone( 'Asia/Kolkata' ) );

			// Campaign has not started yet.
			if ( $current_date < $start_date ) {
				self::$show_banner = false;
				return self::$show_banner;
			}

			// Campaign is over: mark the banner as expired.
			if ( $current_date >= $end_date ) {
				update_option( self::$banner_state_option_name, 4 );
				self::$show_banner = false;
				return self::$show_banner;
			}

			// Already checked on this request.
			if ( ! is_null( self::$show_banner ) ) {
				return self::$show_banner;
			}

			// Closed by the user.
			if ( 1 !== $this->banner_state ) {
				self::$show_banner = false;
				return self::$show_banner;
			}

			$screen    = get_current_screen();
			$screen_id = $screen ? $screen->id : '';

			/**
			 * Screens to show the Black Friday and Cyber Monday 2026 banner on.
			 *
			 * @param string[] $screen_ids Screen ids.
			 */
			$screens_to_show   = (array) apply_filters( 'wtpdf_bfcm_banner_screens', array() );
			self::$show_banner = in_array( $screen_id, $screens_to_show, true );
			return self::$show_banner;
		}

		/**
		 *  Update banner state ajax hook
		 */
		public function update_banner_state() {
			check_ajax_referer( 'wt_bfcm_twenty_twenty_six_banner_nonce' );

			if ( isset( $_POST['wt_bfcm_twenty_twenty_six_banner_action_type'] ) ) {

				$action_type = absint( sanitize_text_field( wp_unslash( $_POST['wt_bfcm_twenty_twenty_six_banner_action_type'] ) ) );
				if ( in_array( $action_type, array( 2, 3 ), true ) ) {
					update_option( self::$banner_state_option_name, $action_type );
				}
			}
			wp_send_json_success();
		}
	}

	new Wt_Bfcm_Twenty_Twenty_Six();
}