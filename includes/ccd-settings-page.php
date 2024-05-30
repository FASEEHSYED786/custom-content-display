<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function ccd_register_settings() {
    add_option('ccd_custom_content', '');
    register_setting('ccd_options_group', 'ccd_custom_content', 'ccd_callback');
}

add_action('admin_init', 'ccd_register_settings');

function ccd_register_options_page() {
    add_options_page('Custom Content Display', 'Custom Content Display', 'manage_options', 'custom-content-display', 'ccd_options_page');
}

add_action('admin_menu', 'ccd_register_options_page');

function ccd_options_page() {
?>
    <div>
    <h2>Custom Content Display</h2>
    <form method="post" action="options.php">
        <?php settings_fields('ccd_options_group'); ?>
        <table>
            <tr valign="top">
                <th scope="row"><label for="ccd_custom_content">Custom Content</label></th>
                <td><textarea id="ccd_custom_content" name="ccd_custom_content" rows="10" cols="50"><?php echo get_option('ccd_custom_content'); ?></textarea></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
    </div>
<?php
}
?>
