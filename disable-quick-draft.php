<?php
/**
 * Disable Quick Draft Widget
 * 
 * Removes the Quick Draft widget from WordPress dashboard for cleaner admin interface.
 * 
 * @author      Torwald45
 * @link        https://github.com/Torwald45/wp-snippet-disable-quick-draft
 * @license     GPL-2.0-or-later
 * @version     2.0.0
 */

add_action('wp_dashboard_setup', 'torwald45_quickdraft_disable_widget');

function torwald45_quickdraft_disable_widget() {
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
