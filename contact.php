<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu phản hồi
    $feedbackNote = mysqli_real_escape_string($conn, $_POST['inquiry']);

    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO feedback (note) VALUES ('$feedbackNote')";

    if ($conn->query($sql) === TRUE) {
        $confirmationMessage = "Đã gửi phản hồi";
    } else {
        $errorMessage = "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        #inquiry {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            height: 200px;
        }
    </style>
</head>
<body class="body">
    <div class="banner">
        <video loop autoplay muted>
            <source src="pictureMyPham/cosmetic.mp4" type="video/mp4">
		</video>
    </div>
    <div class="top-menu">
        <ul>
            <li></li>
            <li><a href="HomePage.php">Trang chủ</a></li>
            <?php include 'logged.php'; ?>
            <li><a href="contact.php">Liên hệ</a></li>
        </ul>
        <div class="top-menu-right">
            <form method="get" action="search.php"> <!-- Đặt action thành trang xử lý tìm kiếm (ví dụ: search.php) -->
                <input type="text" name="search" placeholder="Tìm kiếm..." />
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
    <div class="left-menu">
        <div class="logo">
            <img src="pictureMyPham/cosmetic.png" alt="Logo của bạn" />
        </div>
        <ul class="menu">
            <li class="menu-item">
                <a>Trang điểm</a>
                <ul class="sub-menu">
                    <li><a href="Y_face.php">Face</a></li>
                    <li><a href="Y_mat.php">Mắt</a></li>
                    <li><a href="Y_son.php">Son</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a>Chăm sóc da</a>
                <ul class="sub-menu">
                    <li><a href="Y_serum.php">Serum</a></li>
                    <li><a href="Y_kemduongda.php">Kem dưỡng da</a></li>
                    <li><a href="Y_matna.php">Mặt nạ &amp; tẩy tế bào chết</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a>Nước hoa</a>
                <ul class="sub-menu">
                    <li><a href="Y_nuochoanu.php">Nước hoa nữ</a></li>
                    <li><a href="Y_nuochoanam.php">Nước hoa nam</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="contact-info">
            <p><strong>Địa chỉ:</strong> 218 - Lĩnh Nam - Hoàng Mai - Hà Nội</p>
            <p><strong>Điện thoại:</strong> 035356742</p>
            <p><strong>Email:</strong> Ghostyle@gmail.com</p>
        </div>
        <center>
            <h2>Liên hệ</h2>
            <?php
                if (isset($confirmationMessage)) {
                    echo '<p style="color: yellow; font-weight: bold;">' . $confirmationMessage . '</p>';
                }
                if (isset($errorMessage)) {
                    echo '<p style="color: red; font-weight: bold;">' . $errorMessage . '</p>';
                }
            ?>
            <form method="post" action="contact.php">
                <div class="form-group">
                    <label for="inquiry">Nội dung:</label>
                    <textarea id="inquiry" name="inquiry" rows="6" required></textarea>
                </div>
                <button type="submit">Gửi</button>
            </form>
        </center>
    </div>
    <div class="footer">
        <p>Nguyễn Tùng Lâm 14-10-2002;  Nguyễn Thị Thu hiền 14-03-2002;  Bùi Đình Sỹ Giang 16-10-2002</p>
    </div>
</body>
</html>
