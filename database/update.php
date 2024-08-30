<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
</head>
<body>
    <h2>Sửa Sản Phẩm</h2>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "qlmypham");

        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ma_sp = $_POST["ma_sp"];
            $ten_sp = $_POST["ten_sp"];
            $chi_tiet = $_POST["chi_tiet"];
            $so_luong = $_POST["so_luong"];
            $gia_ban = $_POST["gia_ban"];
            $loaihang = $_POST["loaihang"];

            // Xử lý cập nhật trong CSDL
            $sql_update = "UPDATE sanpham SET ten_sp='$ten_sp', chi_tiet='$chi_tiet', so_luong='$so_luong', gia_ban='$gia_ban', loaihang='$loaihang' WHERE ma_sp='$ma_sp'";
            
            if (mysqli_query($conn, $sql_update)) {
                echo "Cập nhật sản phẩm thành công.";
            } else {
                echo "Lỗi cập nhật sản phẩm: " . mysqli_error($conn);
            }
        }

        $masp = $_GET['id'];
        $sql = "SELECT * FROM sanpham WHERE ma_sp = '$masp'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>
            <form action="" method="post">
                <table>
                    <!-- Your form fields here -->
                    <tr>
                        <td>Mã Sản Phẩm:</td>
                        <td><input type="text" name="ma_sp" value="<?php echo $row['ma_sp']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Tên Sản Phẩm:</td>
                        <td><input type="text" name="ten_sp" value="<?php echo $row['ten_sp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Chi Tiết:</td>
                        <td><input type="text" name="chi_tiet" value="<?php echo $row['chi_tiet']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Số Lượng:</td>
                        <td><input type="text" name="so_luong" value="<?php echo $row['so_luong']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Giá Bán:</td>
                        <td><input type="text" name="gia_ban" value="<?php echo $row['gia_ban']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Loại Hàng:</td>
                        <td><input type="text" name="loaihang" value="<?php echo $row['loaihang']; ?>"></td>
                    </tr>
                </table>
                <input type="submit" value="Cập nhật">
                <a href="display.php"><button type="button">Quay lại</button></a>
            </form>
    <?php
        } else {
            echo "Không tìm thấy sản phẩm.";
        }

        mysqli_close($conn);
    ?>
</body>
</html>
