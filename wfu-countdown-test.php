<?php
/**
 * @todo Set up plugin so WordPress knows its a plugin.
 */

function countdown_shortcode($atts)
{
    $defaults = [
        'id' => '',
        'direction' => 'down',
        'start_date' => '',
        'end_date' => '',
    ];
    $atts = shortcode_atts($defaults, $atts, 'countdown');
    // @todo use the templates/shortcode-countdown/shortcode.php for building this.
    $html = '';
    return $html;
}
// @todo add the shortcode so WP is aware of it

// @todo add this CSS file assets/css/countdown.css
// @todo add this JS file https://static.secure.wfu.edu/js/jquery/plugins/jquery.countdown.min.js
