<?php
add_action('admin_menu', 'wp_admin_menu');
function wp_admin_menu() {
    // Thêm menu cha
    add_menu_page(
        'WP 2025',
        'WP 2025',
        'manage_options',
        'wp2025', // menu_slug
        'wp_admin_page_dashboard',
        'dashicons-admin-page',
        25
    );

    add_submenu_page(
        'wp2025',
        'Đơn hàng',
        'Đơn hàng',
        'manage_options',
        'wp-orders',
        'wp_admin_page_orders',
        26
    );

    add_submenu_page(
        'wp2025',
        'Cấu hình',
        'Cấu hình',
        'manage_options',
        'wp-settings',
        'wp_admin_page_settings',
        26
    );
}

function wp_admin_page_dashboard() {
    include_once WP_PATH . 'includes/admin_pages/dashboard.php';
}

function wp_admin_page_orders() {
    include_once WP_PATH . 'includes/admin_pages/orders.php';
}

function wp_admin_page_settings() {
    include_once WP_PATH . 'includes/admin_pages/settings.php';
}