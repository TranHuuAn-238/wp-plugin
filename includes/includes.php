<?php
// Tạo ra các functions hỗ trợ
include_once WP_PATH . '/includes/functions.php';

// Đăng ký post types và taxonomy
include_once WP_PATH . '/includes/post_types.php';

// Đăng ký metaboxes
include_once WP_PATH . '/includes/metaboxes.php';

// Thêm các cột custom post type và custom taxonomy
include_once WP_PATH . '/includes/admin_columns.php';

// Tạo menu cho admin
include_once WP_PATH . '/includes/admin_menus.php';

// Tạo trang setting cho admin
include_once WP_PATH . '/includes/admin_settings.php';

// Làm việc với CSDL trong WP
include_once WP_PATH . '/includes/classes/WpOrder.php';

// Sử dụng ajax trong php
include_once WP_PATH . '/includes/admin_ajax.php';
