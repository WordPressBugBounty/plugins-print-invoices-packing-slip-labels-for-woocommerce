(function ($) {
    'use strict';

    $(function () {
        const wt_bfcm_twenty_twenty_six_banner = {
            init: function () {
                const data_obj = {
                    _wpnonce: wt_bfcm_twenty_twenty_six_banner_js_params.nonce,
                    action: wt_bfcm_twenty_twenty_six_banner_js_params.action,
                    wt_bfcm_twenty_twenty_six_banner_action_type: '',
                };

                /* The "View plugins" link opens in a new tab on its own; only the close button dismisses the banner. */
                $(document).on('click', '.wt-bfcm-banner-2026 .notice-dismiss', function(e) {
                    e.preventDefault();
                    data_obj['wt_bfcm_twenty_twenty_six_banner_action_type'] = 2; /** Closed by user. */

                    $.ajax({
                        url: wt_bfcm_twenty_twenty_six_banner_js_params.ajax_url,
                        data: data_obj,
                        type: 'POST',
                    });
                });
            }
        };
        wt_bfcm_twenty_twenty_six_banner.init();
    });

})(jQuery);