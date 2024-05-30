<?php
/*
Plugin Name: Custom Content Display
Plugin URI: https://syedfaseeh.com/custom-content-display
Description: A plugin to display custom content using shortcodes.
Version: 1.0
Author: Syed Faseeh Ul Hassan
Author URI: https://syedfaseeh.com
Text Domain: custom-content-display
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('CCD_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CCD_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include necessary files
include_once CCD_PLUGIN_DIR . 'includes/ccd-settings-page.php';
include_once CCD_PLUGIN_DIR . 'includes/ccd-shortcodes.php';

// Activation hook
function ccd_activate() {
    // Actions to perform on plugin activation.
}
register_activation_hook(__FILE__, 'ccd_activate');

// Deactivation hook
function ccd_deactivate() {
    // Actions to perform on plugin deactivation.
}
register_deactivation_hook(__FILE__, 'ccd_deactivate');
