<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function ccd_display_content() {
    return get_option('ccd_custom_content');
}

add_shortcode('custom_content', 'ccd_display_content');
?>
