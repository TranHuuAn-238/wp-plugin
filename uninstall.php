<?php
// Định nghĩa hành động khi plugin bị gỡ
// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Xóa CSDL
// global $wpdb;
// $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );
include_once WP_PATH . '/includes/db/migration-rollback.php';

// Xóa options
delete_option('wp_settings_options');
