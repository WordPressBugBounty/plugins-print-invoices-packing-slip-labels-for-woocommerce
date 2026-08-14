<?php
/**
 * Other solutions (cross-sell) listing shown on the Extensions page.
 *
 * @package Print Invoices, Packing Slip, Delivery Note, Shipping Label for WooCommerce
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'WT_PKLIST_Other_Solutions' ) ) :

	/**
	 * Renders the Extensions page listing and its assets.
	 *
	 * @since 4.9.9
	 */
	class WT_PKLIST_Other_Solutions {

		/**
		 * Handle for this page's stylesheet and script.
		 *
		 * @var string
		 */
		const ASSET_HANDLE = 'wt-pklist-other-solutions';

		/**
		 * Register hooks.
		 */
		public function __construct() {
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
		}

		/**
		 * Enqueue the stylesheet and script for this page only.
		 *
		 * @since 4.9.9
		 *
		 * @param string $hook_suffix Current admin page hook suffix.
		 */
		public function enqueue_assets( $hook_suffix = '' ) {

			if ( ! self::is_other_solutions_page( $hook_suffix ) ) {
				return;
			}

			wp_enqueue_style(
				self::ASSET_HANDLE,
				WF_PKLIST_PLUGIN_URL . 'admin/css/wt-pklist-other-solutions.css',
				array(),
				WF_PKLIST_VERSION,
				'all'
			);

			wp_enqueue_script(
				self::ASSET_HANDLE,
				WF_PKLIST_PLUGIN_URL . 'admin/js/wt-pklist-other-solutions.js',
				array( 'jquery' ),
				WF_PKLIST_VERSION,
				true
			);
		}

		/**
		 * Whether the current request is the Extensions page.
		 *
		 * Matches on the screen the submenu page actually registered, so the
		 * assets are not loaded on some other screen that merely carries the
		 * same 'page' query argument.
		 *
		 * @since 4.9.9
		 *
		 * @param string $hook_suffix Current admin page hook suffix.
		 * @return bool
		 */
		public static function is_other_solutions_page( $hook_suffix = '' ) {

			$slug = WF_PKLIST_POST_TYPE . '_premium_extension';

			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			$page = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';

			if ( $slug !== $page ) {
				return false;
			}

			/*
			 * On the real screen the hook suffix always embeds the menu slug.
			 * Requiring both rules out another screen loaded with the same
			 * 'page' argument, without depending on the exact hook format.
			 */
			if ( '' !== $hook_suffix ) {
				return false !== strpos( $hook_suffix, $slug );
			}

			return true;
		}

		/**
		 * Whether a card's plugin is already active.
		 *
		 * 'file_path' is a basename, or an array of basenames that must ALL be
		 * active before the card counts as owned — that is how a suite card is
		 * hidden only once every plugin it bundles is present.
		 *
		 * 'file_path_any' is a basename, or an array of them, where ANY single
		 * match is enough. Use it for a product shipped under more than one
		 * folder or main-file name.
		 *
		 * @since 4.9.9
		 *
		 * @param array $card Card definition.
		 * @return bool
		 */
		public static function is_plugin_active_card( $card ) {

			if ( empty( $card['file_path'] ) && empty( $card['file_path_any'] ) ) {
				return false;
			}

			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			if ( ! empty( $card['file_path_any'] ) ) {
				foreach ( (array) $card['file_path_any'] as $basename ) {
					if ( ! empty( $basename ) && is_plugin_active( $basename ) ) {
						return true;
					}
				}
			}

			if ( empty( $card['file_path'] ) ) {
				return false;
			}

			if ( is_array( $card['file_path'] ) ) {
				foreach ( $card['file_path'] as $basename ) {
					if ( empty( $basename ) || ! is_plugin_active( $basename ) ) {
						return false;
					}
				}

				return true;
			}

			return is_plugin_active( $card['file_path'] );
		}

		/**
		 * Split cards into grid rows of three columns.
		 *
		 * A 'standard-with-image' card spans two columns, so rows are packed by
		 * column weight rather than by card count — chunking by count leaves a
		 * hole whenever a wide card lands in the last single column of a row.
		 *
		 * @since 4.9.9
		 *
		 * @param array $cards Card definitions.
		 * @return array List of rows, each a list of cards.
		 */
		public static function rows( $cards ) {

			$rows    = array();
			$row     = array();
			$columns = 0;

			foreach ( $cards as $card ) {
				$type = isset( $card['type'] ) ? $card['type'] : 'standard';
				$span = ( 'standard-with-image' === $type && ! empty( $card['image_src'] ) ) ? 2 : 1;

				if ( $columns + $span > 3 && ! empty( $row ) ) {
					$rows[]  = $row;
					$row     = array();
					$columns = 0;
				}

				$row[]    = $card;
				$columns += $span;
			}

			if ( ! empty( $row ) ) {
				$rows[] = $row;
			}

			return $rows;
		}

		/**
		 * Drop cards whose plugin is active, and any cell paired to them via 'requires_id'.
		 *
		 * @since 4.9.9
		 *
		 * @param array $cards List of card definitions.
		 * @return array Filtered list, re-indexed.
		 */
		public static function filter_cards( $cards ) {

			if ( empty( $cards ) || ! is_array( $cards ) ) {
				return array();
			}

			$kept     = array();
			$kept_ids = array();

			foreach ( $cards as $card ) {
				if ( self::is_plugin_active_card( $card ) ) {
					continue;
				}

				$kept[] = $card;

				if ( ! empty( $card['id'] ) ) {
					$kept_ids[] = $card['id'];
				}
			}

			$result = array();

			foreach ( $kept as $card ) {
				if ( ! empty( $card['requires_id'] ) && ! in_array( $card['requires_id'], $kept_ids, true ) ) {
					continue;
				}

				$result[] = $card;
			}

			return $result;
		}
	}

endif;
