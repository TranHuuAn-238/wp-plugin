<?php
// Hiển thị các cột của post type sản phẩm
// add_filter('manage_<post_type>_posts_columns',...)
add_filter('manage_product_posts_columns', 'wp_admin_columns_product_filter_columns');
function wp_admin_columns_product_filter_columns($columns) {
    $columns['product_price']        = 'Giá bán';
    $columns['product_price_sale']   = 'Giá khuyến mãi';
    $columns['product_stock']        = 'Số lượng';
    return $columns;
}

// Hiển thị giá trị các cột ra
// add_action('manage_<post_type>_posts_custom_column',...)
add_action('manage_product_posts_custom_column', 'wp_admin_columns_product_render_columns', 10, 2);
function wp_admin_columns_product_render_columns($column, $post_id) {
    switch ($column) {
        case 'product_price':
            $product_price = (float) get_post_meta($post_id, 'product_price', true);
            echo number_format($product_price);
            break;
        case 'product_price_sale':
            $product_price_sale = (float) get_post_meta($post_id, 'product_price_sale', true);
            echo number_format($product_price_sale);
            break;
        case 'product_stock':
            echo get_post_meta($post_id, 'product_stock', true);
            break;        
    }
}

// Hiển thị các cột của taxonomy product_cat
// add_filter('manage_edit-<taxonomy>_columns',...)
add_filter('manage_edit-product_cat_columns', 'wp_admin_columns_taxonomy_filter_columns');
function wp_admin_columns_taxonomy_filter_columns($columns) {
    $columns['image'] = 'Ảnh';
    return $columns;
}

// Hiển thị giá trị cột image
// add_action('manage_<taxonomy>_custom_column', '')
add_action('manage_product_cat_custom_column', 'wp_admin_columns_taxonomy_render_columns', 10, 3);
function wp_admin_columns_taxonomy_render_columns($out, $column, $term_id) {
    if ($column == 'image') {
        $image = get_term_meta($term_id, 'image', true);
        echo $image;
    }
}