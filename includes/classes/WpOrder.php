<?php
class WpOrder {
    private $_orders = '';
    public function __construct()
    {
        global $wpdb;
        $this->_orders = $wpdb->prefix . 'orders'; // wp_orders
    }

    public function all() {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders";
        $items = $wpdb->get_results($sql);
        return $items;
    }

    public function paginate($limit = 20) {
        global $wpdb;

        $paged = 1;

        // Lấy tổng số records
        $sql = "SELECT count(id) FROM $this->_orders";
        $total_items = $wpdb->get_vars($sql);

        // Thuật toán phân trang
        /**
         * Limit/Per page: limit
         * Tổng số trang: total_pages
         * Tính offset
         */
        $total_pages = ceil($total_items / $limit);
        $offset      = ($paged * $limit) - $limit;

        $sql = "SELECT * FROM $this->_orders";
        $sql .= " ORDER BY id DESC";
        $sql .= " LIMIT $limit OFFSET $offset";

        $items = $wpdb->get_results($sql);
        return $items;
    }

    public function find($id) {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders WHERE id = $id";
        $item = $wpdb->get_row($sql);
        return $item;
    }

    public function save($data) {
        global $wpdb;
        $wpdb->insert($this->_orders, $data);
        $lastId = $wpdb->insert_id;
        $item = $this->find($lastId);
        return $item;
    }

    public function update($id, $data) {
        global $wpdb;
        $wpdb->update($this->_orders, $data, [
            'id' => $id
        ]);
        return true;
    }

    public function destroy($id) {
         global $wpdb;
        $wpdb->delete($this->_orders, [
            'id' => $id
        ]);
        return true;
    }
}