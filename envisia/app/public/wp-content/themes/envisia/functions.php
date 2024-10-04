<?php
// Add custom Theme Functions here

if (function_exists('add_filter')) {
    function custom_translations($strings)
    {
        $translations = array(
            'Quick View' => 'Xem ngay',
            'contact' => 'Liên hệ',
            'all' => 'Tất cả',
            'HOME' => 'Trang chủ',
            'Leave a comment' => 'Bình luận',
            'Leave a Reply' => 'Để lại bình luận',
            'Logged in as admin.' => 'Đăng nhập với tư cách quản trị viên.',
            'post comment' => 'Bình luận',
            'This entry was posted in' => 'Bài viết này đã được đăng trong',
            'and tagged' => 'và được gắn thẻ',
            'Bookmark the' => 'Đánh dấu',
            'Continue reading' => 'Đọc tiếp',
            'Posted in' => 'Đăng trong',
            'Tagged' => 'Gắn thẻ',
            'Filter by price' => 'Lọc theo giá',
            'Default sorting' => 'Sắp xếp mặc định',
            'Sort by popularity' => 'Sắp xếp theo độ phổ biến',
            'Sort by average rating' => 'Sắp xếp theo xếp hạng trung bình',
            'Sort by latest' => 'Sắp xếp theo mới nhất',
            'Sort by price: low to high' => 'Sắp xếp theo giá: thấp đến cao',
            'Sort by price: high to low' => 'Sắp xếp theo giá: cao đến thấp',
            'Add to cart' => 'Thêm vào giỏ hàng',
            'Description' => 'Mô tả',
            'Additional information' => 'Thông tin bổ sung',
            'Reviews' => 'Đánh giá',
            'Tag Cloud' => 'Thẻ',
            'Categories' => 'Danh mục',

            'Add a coupon' => 'Thêm mã giảm giá',
            'Shopping Cart' => 'Giỏ hàng',
            'Checkout details' => 'Chi tiết thanh toán',
            'Order Complete' => 'Đơn hàng hoàn tất',
            'view cart' => 'Xem giỏ hàng',
            'checkout' => 'Thanh toán',
            'Contact information' => 'Thông tin liên hệ',
        );

        foreach ($translations as $original => $translated) {
            $strings = str_ireplace($original, $translated, $strings);
        }

        return $strings;
    }

    add_filter('gettext', 'custom_translations', 20);
}
