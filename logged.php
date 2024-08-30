<?php
// Start the session
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['username'])) {
    // Người dùng đã đăng nhập

    // Hiển thị tên người dùng thay vì nút "Đăng nhập" trên top menu
    echo '<li><a href="logout.php">Đăng xuất</a></li>';
    echo '<li><a href="cart.php">Giỏ hàng</a></li>';
} else {
    // Người dùng chưa đăng nhập

    // Hiển thị nút "Đăng nhập" trên top menu
    echo '<li><a href="login.php">Đăng nhập</a></li>';
}
?>
