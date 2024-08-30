<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

$username = $_GET['id'];
$sql = "DELETE FROM userbase WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
    echo "Xóa người dùng thành công";
    header("Location: user-display.php");
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
