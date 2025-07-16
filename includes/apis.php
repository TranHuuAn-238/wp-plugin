<?php

add_action('rest_api_init', 'wp2025_apis');
function wp2025_apis() {
    $namespace  = 'wp2025/v1';
    $base       = 'orders';

    // http://yourdomain.com/wp-json/wp2025/v1/orders
    register_rest_route($namespace, '/' . $base, [  // wp2025/v1/orders
        [
            'methods'       => WP_REST_Server::READABLE, // GET
            'callback'      => 'wp2025_apis_order_all'
        ],
        [
            'methods'       => WP_REST_Server::CREATABLE, // POST
            'callback'      => 'wp2025_apis_order_store'
        ]
    ]);

    // http://yourdomain.com/wp-json/wp2025/v1/orders/5
    register_rest_route($namespace, '/' . $base . '/(?P<id>[\d]+)', [  // wp2025/v1/orders/5
        [
            'methods'       => WP_REST_Server::READABLE, // GET
            'callback'      => 'wp2025_apis_order_show'
        ],
        [
            'methods'       => WP_REST_Server::CREATABLE, // PUT
            'callback'      => 'wp2025_apis_order_update'
        ],
        [
            'methods'       => WP_REST_Server::CREATABLE, // DELETE
            'callback'      => 'wp2025_apis_order_destroy'
        ]
    ]);

    register_rest_route($namespace, '/' . $base . '/(?P<id>[\d]+)/order_items', [
        'methods'       => WP_REST_Server::READABLE, // GET
        'callback'      => 'wp2025_apis_order_order_items'
    ]);
}

// GET      - /orders - lấy toàn bộ orders
function wp2025_apis_order_all($request) {
    $objWpOrder = new WpOrder();
    $result = $objWpOrder->paginate();
    $data = [
        'success' => true,
        'data'    => $result
    ];
    return new WP_REST_Response($data, 200);
}

// POST     - /orders - thêm mới order
function wp2025_apis_order_store($request) {
    $objWpOrder = new WpOrder();
    $saved = $objWpOrder->save($_POST);
    $data = [
        'success' => true,
        'data'    => $saved
    ];
    return new WP_REST_Response($data, 201);
}

// GET      - /orders/{id} - lấy chi tiết order theo tham số id
function wp2025_apis_order_show($request) {
    $id = $request['id'];
    $objWpOrder = new WpOrder();
    $item = $objWpOrder->find($id);
    $data = [
        'success' => true,
        'data'    => $item
    ];
    return new WP_REST_Response($data, 200);
}

// PUT      - /orders/{id} - cập nhật order theo tham số id
function wp2025_apis_order_update($request) {
    $id = $request['id'];
    $objWpOrder = new WpOrder();
    $saved = $objWpOrder->update($id, $_POST);
    $data = [
        'success' => true,
        'data'    => $saved
    ];
    return new WP_REST_Response($data, 200);
}

// DELETE   - /orders/{id} - xóa order theo tham số id
function wp2025_apis_order_destroy($request) {
    $id = $request['id'];
    $objWpOrder = new WpOrder();
    $saved = $objWpOrder->destroy($id);
    $data = [
        'success' => true
    ];
    return new WP_REST_Response($data, 200);
}

function wp2025_apis_order_order_items($request) {
    $id = $request['id'];
    $data = [
        'success' => true,
        'message' => 'Bạn đã lấy kết quả của orderId ' . $id . ' thành công'
    ];
    return new WP_REST_Response($data, 200);
}
