<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $masp = $_POST['ma_sp'];
    $tensp = $_POST['ten_sp'];
    $chitiet = $_POST['chi_tiet'];
    $soluong = $_POST['so_luong'];
    $giaban = $_POST['gia_ban'];
    $loaihang = $_POST['loaihang'];

    $sql = "INSERT INTO sanpham (ma_sp, ten_sp, chi_tiet, so_luong, gia_ban, loaihang) VALUES ('$masp', '$tensp', '$chitiet', '$soluong', '$giaban', '$loaihang')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm sản phẩm thành công";
        header("Location: display.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <h2>Thêm Sản Phẩm</h2>
    <form id="productForm" action="add.php" method="post" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="ma_sp">Mã Sản Phẩm:</label></td>
                <td><input type="text" name="ma_sp" required></td>
            </tr>
            <tr>
                <td><label for="ten_sp">Tên Sản Phẩm:</label></td>
                <td><input type="text" name="ten_sp" required></td>
            </tr>
            <tr>
                <td><label for="chi_tiet">Chi Tiết:</label></td>
                <td><textarea name="chi_tiet" cols="20" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><label for="so_luong">Số Lượng:</label></td>
                <td><input type="text" name="so_luong" required></td>
            </tr>
            <tr>
                <td><label for="gia_ban">Giá Bán:</label></td>
                <td><input type="text" name="gia_ban" required></td>
            </tr>
            <tr>
                <td><label for="loaihang">Loại Hàng:</label></td>
                <td><input type="text" name="loaihang" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Thêm">
                    <input type="reset" value="Reset">
                    <a href="display.php"><button type="button">Quay lại</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
