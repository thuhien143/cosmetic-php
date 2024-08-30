<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

$deleteSuccess = false;

// Xóa feedback
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_delete = "DELETE FROM feedback WHERE note='$id'";

    if (mysqli_query($conn, $sql_delete)) {
        $deleteSuccess = true;
    } else {
        echo "Lỗi: " . $sql_delete . "<br>" . mysqli_error($conn);
    }
}

// Lấy dữ liệu feedback
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

$data = array(); // Lưu trữ dữ liệu trong một mảng

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; // Thêm mỗi hàng vào mảng dữ liệu
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Feedback</title>
</head>
<body>
    <center>
    <h2>Danh Sách Feedback</h2>

    <?php if (!empty($data)) { ?>
        <table border='1'>
            <tr>
                <th>Note</th>
                <th>Quản lý</th>
            </tr>

            <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $row["note"]; ?></td>
                    <td>
                        <a href='feedback.php?action=delete&id=<?php echo $row["note"]; ?>'>Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <?php if ($deleteSuccess) { ?>
            <p>Xóa feedback thành công!</p>
        <?php } ?>
    <?php } else { ?>
        <p>Không có feedback nào trong cơ sở dữ liệu.</p>
    <?php } ?>
    </center>
</body>
</html>
