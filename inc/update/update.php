<?php
require dirname(__FILE__) . '/plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/basespeed/kqxs/',
    get_template_directory() . '/functions.php',
    'master'
);

function myplugin_auto_update_setting_html( $html, $plugin_file, $plugin_data ) {
    if ( 'kqxs/kqxs.php' === $plugin_file ) {
        //$html = __( 'Auto-updates are not available for this plugin.', 'kqxs' );
        $html = '';
        $html .= '<a href="plugins.php?action=enable-auto-update&plugin=kqxs%2Fkirki.php&paged=1&plugin_status=all&_wpnonce=6fafe16c37" class="toggle-auto-update" data-wp-action="enable">';
        $html .= '<span class="dashicons dashicons-update spin hidden" aria-hidden="true"></span>';
        $html .= '<span class="label">Enable auto-updates</span>';
        $html .= '</a>';
    }

    return $html;
}
add_filter( 'plugin_auto_update_setting_html', 'myplugin_auto_update_setting_html', 10, 3 );
