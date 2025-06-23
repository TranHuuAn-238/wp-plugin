<div class="wrap">
    <h1 class="wp-heading-inline">Quản lý đơn hàng</h1>
    <hr class="wp-header-end">
    <ul class="subsubsub">
        <li class="all">
            <a href="#" class="current">Tất cả <span class="count">(1)</span></a>
            |
        </li>
        <li class="publish">
            <a href="#">Đã xuất bản <span class="count">(1)</span></a>
        </li>
    </ul>
    <form action="" id="posts-filter">
        <p class="search-box">
            <label class="screen-reader-text" for="post-search-input">Tìm kiếm đơn hàng:</label>
            <input type="search" id="post-search-input" name="s" value="" placeholder="Tìm kiếm đơn hàng">
            <input type="submit" id="search-submit" class="button" value="Tìm">
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
                <label for="filter-by-date" class="screen-reader-text">Lọc theo ngày</label>
                <select name="m" id="filter-by-date">
                    <option selected="selected" value="0">Tất cả các ngày</option>
                    <option value="202505">Tháng 5 2025</option>
                </select>
                <label class="screen-reader-text" for="cat">Lọc theo danh mục</label><select name="cat" id="cat" class="postform">
                    <option value="0">Tất cả danh mục</option>
                    <option class="level-0" value="1">Chưa phân loại</option>
                </select>
                <input type="submit" name="filter_action" id="post-query-submit" class="button" value="Lọc">
            </div>
            <div class="tablenav-pages one-page"><span class="displaying-num">1 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Trang hiện tại</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> trên <span class="total-pages">1</span></span></span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span>
            </div>
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
                    <th scope="col" id="title" class="manage-column column-title column-primary sortable desc" abbr="Tiêu đề"><a href="http://wp.test.com:8080/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu đề</span><span class="sorting-indicators"><span class="sorting-indicator asc" aria-hidden="true"></span><span class="sorting-indicator desc" aria-hidden="true"></span></span> <span class="screen-reader-text">Sắp xếp tăng dần.</span></a></th>
                    <th scope="col" id="author" class="manage-column column-author">Tác giả</th>
                    <th scope="col" id="categories" class="manage-column column-categories">Chuyên mục</th>
                    <th scope="col" id="tags" class="manage-column column-tags">Thẻ</th>
                    <th scope="col" id="comments" class="manage-column column-comments num sortable desc" abbr="Bình luận"><a href="http://wp.test.com:8080/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span class="screen-reader-text">Bình luận</span></span><span class="sorting-indicators"><span class="sorting-indicator asc" aria-hidden="true"></span><span class="sorting-indicator desc" aria-hidden="true"></span></span> <span class="screen-reader-text">Sắp xếp tăng dần.</span></a></th>
                    <th scope="col" id="date" class="manage-column column-date sorted desc" aria-sort="descending" abbr="Thời gian"><a href="http://wp.test.com:8080/wp-admin/edit.php?orderby=date&amp;order=asc"><span>Thời gian</span><span class="sorting-indicators"><span class="sorting-indicator asc" aria-hidden="true"></span><span class="sorting-indicator desc" aria-hidden="true"></span></span></a></th>
                </tr>
            </thead>
            <tbody id="the-list">
                <tr id="post-1" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-chua-phan-loai">
                    <th scope="row" class="check-column"> <input id="cb-select-1" type="checkbox" name="post[]" value="1">
                        <label for="cb-select-1">
                            <span class="screen-reader-text">
                                Chọn Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM </span>
                        </label>
                        <div class="locked-indicator">
                            <span class="locked-indicator-icon" aria-hidden="true"></span>
                            <span class="screen-reader-text">
                                “Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM” đã bị khóa </span>
                        </div>
                    </th>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Tiêu đề">
                        <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                        <strong><a class="row-title" href="http://wp.test.com:8080/wp-admin/post.php?post=1&amp;action=edit" aria-label="“Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM” (Chỉnh sửa)">Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM</a></strong>

                        <div class="hidden" id="inline_1">
                            <div class="post_title">Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM</div>
                            <div class="post_name">chao-moi-nguoi</div>
                            <div class="post_author">1</div>
                            <div class="comment_status">open</div>
                            <div class="ping_status">open</div>
                            <div class="_status">publish</div>
                            <div class="jj">22</div>
                            <div class="mm">05</div>
                            <div class="aa">2025</div>
                            <div class="hh">14</div>
                            <div class="mn">35</div>
                            <div class="ss">34</div>
                            <div class="post_password"></div>
                            <div class="page_template">default</div>
                            <div class="post_category" id="category_1">1</div>
                            <div class="tags_input" id="post_tag_1"></div>
                            <div class="sticky"></div>
                            <div class="post_format"></div>
                        </div>
                        <div class="row-actions"><span class="edit"><a href="http://wp.test.com:8080/wp-admin/post.php?post=1&amp;action=edit" aria-label="Sửa “Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM”">Chỉnh sửa</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Sửa nhanh “Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM”" aria-expanded="false">Sửa nhanh</button> | </span><span class="trash"><a href="http://wp.test.com:8080/wp-admin/post.php?post=1&amp;action=trash&amp;_wpnonce=f4ec1fd39b" class="submitdelete" aria-label="Bỏ “Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM” vào thùng rác">Xóa tạm</a> | </span><span class="view"><a href="http://wp.test.com:8080/chao-moi-nguoi/" rel="bookmark" aria-label="Xem “Thế Giới Di Động Nằm Trong Danh Sách Các Công Ty Nộp Thuế Trên 1.000 Tỷ Đồng Vào Ngân Sách Nhà Nước Tại TP. HCM”">Xem</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Hiển thị chi tiết</span></button>
                    </td>
                    <td class="author column-author" data-colname="Tác giả"><a href="edit.php?post_type=post&amp;author=1">admin</a></td>
                    <td class="categories column-categories" data-colname="Danh mục"><a href="edit.php?category_name=chua-phan-loai">Chưa phân loại</a></td>
                    <td class="tags column-tags" data-colname="Thẻ"><span aria-hidden="true">—</span><span class="screen-reader-text">Không có thẻ nào</span></td>
                    <td class="comments column-comments" data-colname="Bình luận">
                        <div class="post-com-count-wrapper">
                            <a href="http://wp.test.com:8080/wp-admin/edit-comments.php?p=1&amp;comment_status=approved" class="post-com-count post-com-count-approved"><span class="comment-count-approved" aria-hidden="true">1</span><span class="screen-reader-text">1 bình luận</span></a><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">Không có bình luận nào đang chờ xử lí</span></span>
                        </div>
                    </td>
                    <td class="date column-date" data-colname="Thời gian">Đã xuất bản<br>22/05/2025 lúc 2:35 chiều</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td class="manage-column column-cb check-column"><input id="cb-select-all-2" type="checkbox">
                        <label for="cb-select-all-2"><span class="screen-reader-text">Chọn toàn bộ</span></label>
                    </td>
                    <th scope="col" class="manage-column column-title column-primary sortable desc" abbr="Tiêu đề"><a href="http://wp.test.com:8080/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Tiêu đề</span><span class="sorting-indicators"><span class="sorting-indicator asc" aria-hidden="true"></span><span class="sorting-indicator desc" aria-hidden="true"></span></span> <span class="screen-reader-text">Sắp xếp tăng dần.</span></a></th>
                    <th scope="col" class="manage-column column-author">Tác giả</th>
                    <th scope="col" class="manage-column column-categories">Chuyên mục</th>
                    <th scope="col" class="manage-column column-tags">Thẻ</th>
                    <th scope="col" class="manage-column column-comments num sortable desc" abbr="Bình luận"><a href="http://wp.test.com:8080/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Bình luận" aria-hidden="true"></span><span class="screen-reader-text">Bình luận</span></span><span class="sorting-indicators"><span class="sorting-indicator asc" aria-hidden="true"></span><span class="sorting-indicator desc" aria-hidden="true"></span></span> <span class="screen-reader-text">Sắp xếp tăng dần.</span></a></th>
                    <th scope="col" class="manage-column column-date sorted desc" aria-sort="descending" abbr="Thời gian"><a href="http://wp.test.com:8080/wp-admin/edit.php?orderby=date&amp;order=asc"><span>Thời gian</span><span class="sorting-indicators"><span class="sorting-indicator asc" aria-hidden="true"></span><span class="sorting-indicator desc" aria-hidden="true"></span></span></a></th>
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
            <div class="tablenav-pages one-page"><span class="displaying-num">1 mục</span>
                <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
                    <span class="screen-reader-text">Trang hiện tại</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 trên <span class="total-pages">1</span></span></span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
                    <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span>
            </div>
            <br class="clear">
        </div>
    </form>
</div>