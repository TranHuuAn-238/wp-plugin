<?php
// Product Screen: Màn hình chỉnh sửa, thêm mới sản phẩm
// Đăng ký meta box cho sản phẩm
add_action( 'add_meta_boxes', 'wp_meta_box_product' );

// Can thiệp vào hành động lưu bài viết
add_action( 'save_post', 'wp_save_post_product' );

function wp_save_post_product($post_id) {
    if ($_REQUEST['post_type'] == 'product') {
        $product_price      = $_REQUEST['product_price'];
        $product_price_sale = $_REQUEST['product_price_sale'];
        $product_stock      = $_REQUEST['product_stock'];
        // Lưu vào CSDL: wp_postmeta
        update_post_meta($post_id, 'product_price', $product_price);
        update_post_meta($post_id, 'product_price_sale', $product_price_sale);
        update_post_meta($post_id, 'product_stock', $product_stock);
    }
}

function wp_meta_box_product() {
    add_meta_box(
        'wp_product_info',
        'Thông tin sản phẩm',
        'meta_box_product_html',
        'product'
    );
}

function meta_box_product_html() {
    include_once WP_PATH . '/includes/templates/meta_box_product.php';

}