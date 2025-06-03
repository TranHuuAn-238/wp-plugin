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
