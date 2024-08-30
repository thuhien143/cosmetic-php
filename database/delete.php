<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

$masp = $_GET['id'];
$sql = "DELETE FROM sanpham WHERE ma_sp='$masp'";

if (mysqli_query($conn, $sql)) {
    echo "Xóa sản phẩm thành công";
    header("Location: display.php");
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
