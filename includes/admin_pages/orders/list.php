<div class="wrap">
    <h1 class="wp-heading-inline"><?= __('Manage Orders', 'wp-ecommerce'); ?></h1>
    <hr class="wp-header-end">
    <ul class="subsubsub">
        <li class="all">
            <a href="admin.php?page=wp-orders" class="current"><?= __('All', 'wp-ecommerce'); ?> <span class="count">(1)</span></a>
            |
        </li>
        <li class="publish">
            <a href="admin.php?page=wp-orders&status=pending"><?= __('New Orders', 'wp-ecommerce'); ?></span></a> |
        </li>
        <li class="publish">
            <a href="admin.php?page=wp-orders&status=completed"><?= __('Completed Orders', 'wp-ecommerce'); ?></span></a> |
        </li>
        <li class="publish">
            <a href="admin.php?page=wp-orders&status=canceled"><?= __('Canceled Orders', 'wp-ecommerce'); ?></span></a>
        </li>
    </ul>
    <form id="posts-filter" method="get">
        <input type="hidden" name="page" value="wp-orders">
        <!-- <input type="hidden" name="paged" value="1"> -->
        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input"><?= __('Search Orders', 'wp-ecommerce'); ?>:</label>
            <input type="search" id="post-search-input" name="s" value="" placeholder="<?= __('Search Orders', 'wp-ecommerce'); ?>">
            <input type="submit" id="search-submit" class="button" value="<?= __('Search Orders', 'wp-ecommerce'); ?>">
        </p>
        <div class="tablenav top">
            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-top" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label><select name="action" id="bulk-action-selector-top">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" name="bulk_action" id="doaction" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
                <label class="screen-reader-text" for="cat">Lọc theo danh mục</label>
                <select name="status" id="cat" class="postform">
                    <option value="0">Tất cả trạng thái</option>
                    <option class="level-0" value="pending">Đơn hàng mới</option>
                    <option class="level-0" value="completed">Đơn đã hoàn thành</option>
                    <option class="level-0" value="canceled">Đơn đã hủy</option>
                </select>
                <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
            </div>
            
            <?php
            include WP_PATH . '/includes/templates/elements/elm-paginate.php';
            ?>
            <br class="clear">
        </div>
        <h2 class="screen-reader-text">Danh sách bài viết</h2>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <caption class="screen-reader-text">Bảng được sắp xếp theo ngày. Giảm dần</caption>
            <thead>
                <tr>
                    <td id="cb" class="manage-column column-cb check-column"><input id="cb-select-all-1" type="checkbox">
                        <label for="cb-select-all-1"><span class="screen-reader-text">Chọn toàn bộ</span></label>
                    </td>
                    <th scope="col" id="author" class="manage-column column-primary">Mã đơn hàng</th>
                    <th scope="col" id="author" class="manage-column">Tổng tiền</th>
                    <th scope="col" id="author" class="manage-column">Khách hàng</th>
                    <th scope="col" id="author" class="manage-column">Điện thoại</th>
                    <th scope="col" id="author" class="manage-column">Trạng thái</th>
                    <th scope="col" id="author" class="manage-column">Thời gian</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <?php foreach($items as $item) : ?>
                <tr id="post<?= $item->id; ?>" class="iedit author-self level-0 post<?= $item->id; ?> type-post status-publish format-standard hentry category-chua-phan-loai">
                    <th scope="row" class="check-column">
                        <input id="cb-select<?= $item->id; ?>" type="checkbox" name="post[]" value="<?= $item->id; ?>">
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <strong><a class="row-title" href="admin.php?page=wp-orders&order_id=<?= $item->id; ?>"># <?= $item->id; ?></a></strong>
                    </td>
                    <td><?= number_format($item->total); ?></td>
                    <td><?= $item->customer_name; ?></td>
                    <td><?= $item->customer_phone; ?></td>
                    <td>
                        <select name="" id="" class="order_status" data-id="<?= $item->id; ?>">
                            <option <?= $item->status == 'pending' ? 'selected' : ''; ?> value="pending">Đơn hàng mới</option>
                            <option <?= $item->status == 'completed' ? 'selected' : ''; ?> value="completed">Đơn đã hoàn thành</option>
                            <option <?= $item->status == 'canceled' ? 'selected' : ''; ?> value="canceled">Đơn đã hủy</option>
                        </select>
                    </td>
                    <td class="date column-date"><?= date('d-m-Y', strtotime($item->created)); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td class="manage-column column-cb check-column"><input id="cb-select-all-2" type="checkbox">
                        <label for="cb-select-all-2"><span class="screen-reader-text">Chọn toàn bộ</span></label>
                    </td>
                    <th scope="col" id="author" class="manage-column column-primary">Mã đơn hàng</th>
                    <th scope="col" id="author" class="manage-column">Tổng tiền</th>
                    <th scope="col" id="author" class="manage-column">Khách hàng</th>
                    <th scope="col" id="author" class="manage-column">Điện thoại</th>
                    <th scope="col" id="author" class="manage-column">Trạng thái</th>
                    <th scope="col" id="author" class="manage-column">Thời gian</th>
                </tr>
            </tfoot>
        </table>
        <div class="tablenav bottom">
            <div class="alignleft actions bulkactions">
                <label for="bulk-action-selector-bottom" class="screen-reader-text">Lựa chọn thao tác hàng loạt</label>
                <select name="action2" id="bulk-action-selector-bottom">
                    <option value="-1">Hành động</option>
                    <option value="edit" class="hide-if-no-js">Chỉnh sửa</option>
                    <option value="trash">Bỏ vào thùng rác</option>
                </select>
                <input type="submit" name="bulk_action" id="doaction2" class="button action" value="Áp dụng">
            </div>
            <div class="alignleft actions">
            </div>
            <?php
            include WP_PATH . '/includes/templates/elements/elm-paginate.php';
            ?>
            <br class="clear">
        </div>
    </form>
</div>