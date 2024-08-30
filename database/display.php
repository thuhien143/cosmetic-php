<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

$sql = "SELECT * FROM sanpham ORDER BY ma_sp";
$result = mysqli_query($conn, $sql);

$data = array(); // Store the data in an array

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; // Add each row to the data array
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
</head>
<body>
    <center>
    <h2>Danh Sách Sản Phẩm</h2>

    <?php if (!empty($data)) { ?>
        <table border='1'>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Chi Tiết</th>
                <th>Số Lượng</th>
                <th>Giá Bán</th>
                <th>Loại Hàng</th>
                <th>Quản lý</th>
            </tr>

            <?php foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $row["ma_sp"]; ?></td>
                    <td><?php echo $row["ten_sp"]; ?></td>
                    <td><?php echo $row["chi_tiet"]; ?></td>
                    <td><?php echo $row["so_luong"]; ?></td>
                    <td><?php echo $row["gia_ban"]; ?></td>
                    <td><?php echo $row["loaihang"]; ?></td>
                    <td>
                        <a href='update.php?id=<?php echo $row["ma_sp"]; ?>'>Sửa</a> | 
                        <a href='delete.php?id=<?php echo $row["ma_sp"]; ?>'>Xóa</a>
                    </td>
                </tr>
            <?php } ?>

            <tr>
                <td colspan="7" align="center">
                    <a href="add.php"><button type="button">Thêm</button></a>
                </td>
            </tr>
        </table>
    <?php } else { ?>
        <p>Không có sản phẩm nào trong cơ sở dữ liệu.</p>
    <?php } ?>
    </center>
</body>
</html>
