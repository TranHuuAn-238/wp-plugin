<?php
/*
 * Plugin Name:       WP - Ecommerce
 * Plugin URI:        #
 * Description:       Plugin for test.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Siêu Rơm
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp-ecommerce
 * Domain Path:       /languages
 */

// Định nghĩa các hằng số của plugin
define('WP_PATH', plugin_dir_path(__FILE__)); // include các file php khác
define('WP_URI', plugin_dir_url(__FILE__));   // include js, css, images

// Định nghĩa hành động khi plugin được kích hoạt
register_activation_hook( __FILE__, 'wp_ecommerce_activation' );
function wp_ecommerce_activation() {
    // Không được có output (echo ở đây)
    // Tạo CSDL
    include_once WP_PATH . '/includes/db/migration.php';
    // Tạo dữ liệu mẫu
    include_once WP_PATH . '/includes/db/seeder.php';
    // Tạo options
    update_option('wp_settings_options', []);
}

// Định nghĩa hành động khi plugin ngừng kích hoạt
register_deactivation_hook( __FILE__, 'wp_ecommerce_deactivation' );
function wp_ecommerce_deactivation() {
    // Có thể xóa CSDL
    // include_once WP_PATH . '/includes/db/migration-rollback.php';
    // Xóa options
    // delete_option('wp_settings_options');
}

include_once WP_PATH . '/includes/includes.php';