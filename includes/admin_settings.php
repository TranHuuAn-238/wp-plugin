<?php
// Đăng ký cấu hình
/*
    $option_group: wp_settings_page
    $option_name: wp_settings_options  (được lưu vào DB)

    wp_settings_section_shop_info: Thông tin cửa hàng
        wp_settings_field_name: Tên cửa hàng
        wp_settings_field_phone: Số điện thoại
        wp_settings_field_email: Địa chỉ email
    wp_settings_section_shop_payment: Thông tin cửa hàng
        wp_settings_field_bank_name: Tên ngân hàng
        wp_settings_field_bank_number: Số tài khoản
        wp_settings_field_bank_user: Chủ tài khoản
 */

add_action('admin_init', 'wp_settings_init');
function wp_settings_init() {
    /*
    register_setting( 'wporg', 'wporg_options' );
    add_settings_section( string $id, string $title, callable $callback, string $page, array $args = array() )
    add_settings_field( string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = array() )
    */
    register_setting( 'wp_settings_page', 'wp_settings_options' );
	add_settings_section(
		'wp_settings_section_shop_info',
		'Thông tin cửa hàng',
        'wp_settings_section_shop_info_callback',
		'wp_settings_page'
	);
        add_settings_field(
            'wp_settings_field_name',
            'Tên cửa hàng',
            'wp_settings_field_render',
            'wp_settings_page',
            'wp_settings_section_shop_info',
            [
                'label_for' => 'wp_settings_field_name',
                'type'      => 'text',
                'class'     => 'form-control'
            ]
        );
        add_settings_field(
            'wp_settings_field_phone',
            'Số điện thoại',
            'wp_settings_field_render',
            'wp_settings_page',
            'wp_settings_section_shop_info',
            [
                'label_for' => 'wp_settings_field_phone',
                'type'      => 'text',
                'class'     => 'form-control'
            ]
        );
        add_settings_field(
            'wp_settings_field_email',
            'Email',
            'wp_settings_field_render',
            'wp_settings_page',
            'wp_settings_section_shop_info',
            [
                'label_for' => 'wp_settings_field_email',
                'type'      => 'text',
                'class'     => 'form-control'
            ]
        );
    add_settings_section(
		'wp_settings_section_shop_payment',
		'Thông tin thanh toán',
        'wp_settings_section_shop_payment_callback',
		'wp_settings_page'
	);
        add_settings_field(
            'wp_settings_field_bank_name',
            'Tên ngân hàng',
            'wp_settings_field_render',
            'wp_settings_page',
            'wp_settings_section_shop_payment',
            [
                'label_for' => 'wp_settings_field_bank_name',
                'type'      => 'text',
                'class'     => 'form-control'
            ]
        );
        add_settings_field(
            'wp_settings_field_bank_number',
            'Số tài khoản',
            'wp_settings_field_render',
            'wp_settings_page',
            'wp_settings_section_shop_payment',
            [
                'label_for' => 'wp_settings_field_bank_number',
                'type'      => 'text',
                'class'     => 'form-control'
            ]
        );
        add_settings_field(
            'wp_settings_field_bank_user',
            'Chủ tài khoản',
            'wp_settings_field_render',
            'wp_settings_page',
            'wp_settings_section_shop_payment',
            [
                'label_for' => 'wp_settings_field_bank_user',
                'type'      => 'text',
                'class'     => 'form-control'
            ]
        );
}

function wp_settings_section_shop_info_callback() {
    echo '<p>Thông tin về cửa hàng của bạn</p>';
}

function wp_settings_section_shop_payment_callback() {
    echo '<p>Thông tin về tài khoản ngân hàng</p>';
}

function wp_settings_field_render($args) {
    $type = isset($args['type']) ? $args['type'] : 'text';
    $options = get_option('wp_settings_options');

    switch ($type) {
        case 'text':
            ?>
            <input type="text" 
                name="wp_settings_options[<?= $args['label_for']; ?>]"
                value="<?= $options[$args['label_for']]; ?>">
            <?php
            break;
        case 'password':
            ?>
            <input type="password" 
                name="wp_settings_options[<?= $args['label_for']; ?>]"
                value="<?= $options[$args['label_for']]; ?>]">
            <?php
            break;
    }
}