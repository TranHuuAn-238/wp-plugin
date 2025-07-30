<?php
    $objOrder = new WpOrder();
    $result = $objOrder->paginate(2);
    // $items       = $result['items'];
    // $total_pages = $result['total_pages'];
    // $total_items = $result['total_items'];

    extract($result);
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
    if ($action == 'trash') {
        $orderIds = $_REQUEST['post'];
        if (count($orderIds)) {
            foreach ($orderIds as $orderId) {
                $objOrder->trash($orderId);
            }
        }
        wp2025_redirect('admin.php?page=wp-orders');
        exit();
    }

    if (isset($_GET['order_id']) && $_GET['order_id'] != '') {
        include_once WP_PATH . '/includes/admin_pages/orders/edit.php';
    } else {
        include_once WP_PATH . '/includes/admin_pages/orders/list.php';
    }
    
?>

