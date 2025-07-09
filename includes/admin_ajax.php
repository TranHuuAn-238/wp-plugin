<?php
// Khi đã đăng nhập
add_action( 'wp_ajax_wp_order_change_status', 'wp_order_change_status' );
// Khi chưa đăng nhập
add_action( 'wp_ajax_nopriv_wp_order_change_status', 'wp_order_change_status' );

function wp_order_change_status() {
    $order_id = $_REQUEST['order_id'];
    $status = $_REQUEST['status'];
    $onjWpOrder = new WpOrder();
    $onjWpOrder->change_status($order_id, $status);
    $res = [
        'success' => true
    ];
    echo json_encode($res);
    die();
}