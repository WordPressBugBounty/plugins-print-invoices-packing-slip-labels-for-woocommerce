/**
 * Category sidebar tab switching for the Extensions page.
 *
 * @package Print Invoices, Packing Slip, Delivery Note, Shipping Label for WooCommerce
 * @since   4.9.9
 */
( function ( $ ) {
	'use strict';

	$( document ).ready( function () {
		var $links    = $( '.wt-pklist-os-cat-link' );
		var $panels   = $( '.wt-pklist-os-category-panel' );
		var $title    = $( '#wt-pklist-os-cat-title' );
		var $subtitle = $( '#wt-pklist-os-cat-subtitle' );

		/**
		 * Equalize card heights per row within the active panel.
		 *
		 * The grid lets an expanded card grow on its own, which also lets collapsed
		 * cards in the same row vary in height. This groups cards by their offset
		 * top and sets each row's cards to the tallest natural height in that row.
		 */
		function equalizeCardHeights() {
			var $panel = $panels.filter( '.active' );
			if ( ! $panel.length ) {
				return;
			}

			var $cards = $panel.find( '.wt-pklist-os-card' );
			if ( ! $cards.length ) {
				return;
			}

			/*
			 * Bail before touching anything while a card is expanded. Levelling
			 * would drag its neighbours up to the expanded card's height, and
			 * resetting first would drop them back to their natural height —
			 * either way they move. They keep what they have until everything
			 * is collapsed again.
			 */
			if ( $panel.find( '.wt-pklist-os-show-more-less.is-expanded' ).length ) {
				return;
			}

			$cards.css( 'min-height', '' );

			var rows = {};
			$cards.each( function () {
				var top = Math.round( $( this ).position().top );
				if ( ! rows[ top ] ) {
					rows[ top ] = [];
				}
				rows[ top ].push( this );
			} );

			$.each( rows, function ( top, cards ) {
				var maxHeight = 0;
				$( cards ).each( function () {
					var h = $( this ).outerHeight();
					if ( h > maxHeight ) {
						maxHeight = h;
					}
				} );
				$( cards ).css( 'min-height', maxHeight + 'px' );
			} );
		}

		equalizeCardHeights();

		/*
		 * The first pass runs before the card illustrations have loaded, so a
		 * with-image card grows afterwards and its row stops being level.
		 * Re-measure once every image is in, and again per image as a fallback
		 * for anything that finishes late or errors out.
		 */
		$( window ).on( 'load', equalizeCardHeights );

		$( '.wt-pklist-os-card img' ).each( function () {
			if ( ! this.complete ) {
				$( this ).on( 'load error', equalizeCardHeights );
			}
		} );

		var resizeTimer;
		$( window ).on( 'resize', function () {
			clearTimeout( resizeTimer );
			resizeTimer = setTimeout( equalizeCardHeights, 150 );
		} );

		$links.on( 'click', function ( e ) {
			e.preventDefault();

			var category = $( this ).data( 'category' );

			$links.removeClass( 'active' );
			$( this ).addClass( 'active' );

			$panels.removeClass( 'active' );
			var $panel = $( '#wt-pklist-os-panel-' + category );
			$panel.addClass( 'active' );

			$title.text( $panel.data( 'title' ) );
			$subtitle.text( $panel.data( 'subtitle' ) );

			setTimeout( equalizeCardHeights, 50 );
		} );

		/*
		 * Show More / Show Less toggle for cards with more than three features.
		 * Scoped to the clicked card so one card expanding does not expand the
		 * rest of the grid.
		 */
		$( '.wt-pklist-os-cta-toggle' ).on( 'click', function ( e ) {
			e.preventDefault();

			var $toggle   = $( this );
			var $wrap     = $toggle.closest( '.wt-pklist-os-show-more-less' );
			var $hidden   = $wrap.prev( '.wt-pklist-os-card-features' ).find( '.hidden-feature' );
			// Track state with a class rather than :visible, which is unreliable mid-animation.
			var expanding = ! $wrap.hasClass( 'is-expanded' );

			$wrap.toggleClass( 'is-expanded', expanding );

			/*
			 * Release only the clicked card's levelled height so it can grow past
			 * its row. Its neighbours keep theirs and stay exactly where they are
			 * — clearing them too would shrink them back to their natural height.
			 */
			$toggle.closest( '.wt-pklist-os-card' ).css( 'min-height', '' );

			// Set once here rather than in the per-element animation callback.
			$toggle.text( expanding ? $toggle.data( 'hide-text' ) : $toggle.data( 'show-text' ) );

			$hidden.stop( true, true ).slideToggle( {
				duration: 100,
				/*
				 * slideDown restores an li to 'list-item', which drops the flex
				 * layout the tick icon depends on. Force it back to flex.
				 */
				start: function () {
					$( this ).css( 'display', 'flex' );
				}
			} ).promise().done( function () {
				// equalizeCardHeights() bails out on its own if anything is expanded.
				equalizeCardHeights();
			} );
		} );
	} );
}( jQuery ) );
