<?php
require DIR . 'inc/update/Puc/v4p4/Factory.php';
require DIR . 'inc/update/Puc/v4/Factory.php';
require DIR . 'inc/update/Puc/v4p4/Autoloader.php';
new Puc_v4p4_Autoloader();

//Register classes defined in this file with the factory.
//Puc_v4_Factory::addVersion('Plugin_UpdateChecker', 'Puc_v4p4_Plugin_UpdateChecker', '4.4');
Puc_v4_Factory::addVersion('Theme_UpdateChecker', 'Puc_v4p4_Theme_UpdateChecker', '4.4');

//Puc_v4_Factory::addVersion('Vcs_PluginUpdateChecker', 'Puc_v4p4_Vcs_PluginUpdateChecker', '4.4');
Puc_v4_Factory::addVersion('Vcs_ThemeUpdateChecker', 'Puc_v4p4_Vcs_ThemeUpdateChecker', '4.4');

Puc_v4_Factory::addVersion('GitHubApi', 'Puc_v4p4_Vcs_GitHubApi', '4.4');

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/basespeed/kqxs/',
    get_template_directory() . '/functions.php',
    'kqxs'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('0f32c4b2e81d900dbb6209f32859ce3ab5a65566');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');


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
