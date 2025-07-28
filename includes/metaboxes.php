<?php
// Product Screen: Màn hình chỉnh sửa, thêm mới sản phẩm
// Đăng ký meta box cho sản phẩm
add_action( 'add_meta_boxes', 'wp_meta_box_product' );

// Can thiệp vào hành động lưu bài viết
add_action( 'save_post', 'wp_save_post_product' );

function wp_save_post_product($post_id) {
    if ($_REQUEST['post_type'] == 'product') {
        if (isset($_REQUEST['product_price'])) {
            $product_price      = $_REQUEST['product_price'];
            // Lưu vào CSDL: wp_postmeta
            update_post_meta($post_id, 'product_price', $product_price);
        }
        if (isset($_REQUEST['product_price_sale'])) {
            $product_price_sale = $_REQUEST['product_price_sale'];
            update_post_meta($post_id, 'product_price_sale', $product_price_sale);
        }
        if (isset($_REQUEST['product_stock'])) {
            $product_stock      = $_REQUEST['product_stock'];
            update_post_meta($post_id, 'product_stock', $product_stock);
        }
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

// Category screen

// Đăng ký thêm trường cho taxonomy
// Form lúc thêm mới: add_action('<taxonomy_name>_add_form_fields',...
add_action('product_cat_add_form_fields', 'wp_meta_box_product_cat_add');
// Form lúc chỉnh sửa: add_action('<taxonomy_name>_edit_form_fields,...
add_action('product_cat_edit_form_fields', 'wp_meta_box_product_cat_edit', 10, 2);

function wp_meta_box_product_cat_add() {
    include_once WP_PATH . '/includes/templates/meta_box_product_cat_add.php';
}

function wp_meta_box_product_cat_edit($tag, $taxonomy) {
    include_once WP_PATH . '/includes/templates/meta_box_product_cat_edit.php';
}

// Xử lý khi lưu term
/**
 * do_action('edit_<taxonomy_name>');
 * do_action('create_<taxonomy_name>');
 */

add_action('create_product_cat', 'wp_meta_box_product_cat_save', 10, 1);
add_action('edit_product_cat', 'wp_meta_box_product_cat_save', 10, 1);

function wp_meta_box_product_cat_save($term_id) {
    $image = $_POST['image'];
    update_term_meta($term_id, 'image', $image);
}
