<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

$sql = "SELECT * FROM userbase";
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
    <title>Danh Sách Người Dùng</title>
</head>
<body>
    <center>
    <h2>Danh Sách Người Dùng</h2>

    <?php if (!empty($data)) { ?>
        <table border='1'>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Password</th>
                <th>Re-enter Password</th>
                <th>Account Type</th>
                <th>Quản lý</th>
            </tr>

            <?php foreach($data as $row) { ?>
                <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phonenumber"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><?php echo $row["reenterpassword"]; ?></td>
                    <td><?php echo $row["AccType"]; ?></td>
                    <td>
                        <a href='user-update.php?username=<?php echo $row["username"]; ?>'>Sửa</a> |
                        <a href='user-delete.php?id=<?php echo $row["username"]; ?>'>Xóa</a>
                    </td>
                </tr>
            <?php } ?>

            <tr>
                <td colspan="9" align = "center">
                    <a href="user-add.php"><button type="button" >Thêm</button></a>
                </td>
            </tr>
        </table>
    <?php } else { ?>
        <p>Không có người dùng nào trong cơ sở dữ liệu.</p>
    <?php } ?>
    </center>
</body>
</html>
