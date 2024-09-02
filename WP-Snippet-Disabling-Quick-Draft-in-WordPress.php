// WP-Snippet-Disabling-Quick-Draft-in-WordPress
function disable_quick_draft() {
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'disable_quick_draft');
