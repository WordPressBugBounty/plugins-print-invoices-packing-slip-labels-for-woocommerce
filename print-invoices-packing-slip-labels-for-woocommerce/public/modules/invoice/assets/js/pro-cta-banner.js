(function( $ ) {
    /* Keep the newsletter box just below the upgrade card, whatever the card's height. */
    function place_newsletter_below_cta() {
        const cta        = $('.wt-pklist-cta-tile:visible');
        const newsletter = $('.wt_newsletter_subscription_widget:visible');
        if ( ! cta.length || ! newsletter.length ) {
            return;
        }
        const current_top = parseFloat( newsletter.css('top') ) || 0;
        const natural_top = newsletter.offset().top - current_top;
        newsletter.css( 'top', ( cta.offset().top + cta.outerHeight() + 20 - natural_top ) + 'px' );
    }

    $(window).on('hashchange', function (e) {
        const location_hash = window.location.hash;
        if(("" !== location_hash && "#general" === location_hash) || "" === location_hash)
        {
            $('.wf-tab-head').css('width','100%');
            $('.wt_pro_addon_tile_doc').parent().show();
            $('.wt_pro_addon_tile_doc').css('top','5em');
            $('.wt_newsletter_subscription_widget').css('top','54em');
            place_newsletter_below_cta();
        }else if("" !== location_hash){
            $('.wf-tab-head').css('width','auto');
            $('.wt_pro_addon_tile_doc').parent().hide();
        }
    }).trigger('hashchange');

    $(window).on('load resize', place_newsletter_below_cta);
    $(document).on('click', '.wt-pklist-cta-card__toggle', function () {
        setTimeout( place_newsletter_below_cta, 0 );
    });
})( jQuery );
