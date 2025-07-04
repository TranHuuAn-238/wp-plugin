<?php
// Đăng ký loại bài viết sản phẩm
add_action('init', 'wp_custom_post_type');
function wp_custom_post_type() {
    // post: bài viết
    // page: trang
    // product: Sản phẩm
    // http://wp.test.com:8080/products/iphone-12
	register_post_type('product',
		array(
			'labels'      => array(
				'name'          => __('Các sản phẩm', 'wp-ecommerce'),
				'singular_name' => __('Sản phẩm', 'wp-ecommerce'),
			),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'products'),
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
		)
	);
}


add_action( 'init', 'wp_register_taxonomy_product' );
function wp_register_taxonomy_product() {
    $labels = array(
        'name'              => _x( 'Danh mục', 'taxonomy general name' ),
        'singular_name'     => _x( 'Danh mục', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Danh mục' ),
        'all_items'         => __( 'All Danh mục' ),
        'parent_item'       => __( 'Parent Danh mục' ),
        'parent_item_colon' => __( 'Parent Danh mục:' ),
        'edit_item'         => __( 'Edit Danh mục' ),
        'update_item'       => __( 'Update Danh mục' ),
        'add_new_item'      => __( 'Add New Danh mục' ),
        'new_item_name'     => __( 'New Danh mục' ),
        'menu_name'         => __( 'Danh mục' ),
    );
    $args   = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ], // danh-muc
    );
	register_taxonomy( 'product_cat', [ 'product' ], $args );

    // http://phongvu.vn/danh-muc/iphone
}