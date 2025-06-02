<?php
// Định nghĩa hành động khi plugin bị gỡ
// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

// Xóa CSDL
// global $wpdb;
// $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );

// Xóa options