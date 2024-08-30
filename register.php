<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý dữ liệu đăng ký
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $reenterpassword = mysqli_real_escape_string($conn, $_POST['reenterpassword']);

    // Kiểm tra mật khẩu nhập lại
    if ($password != $reenterpassword) {
        $error_message = "Mật khẩu không khớp. Vui lòng nhập lại.";
    } else {
        // Kiểm tra tên đăng nhập và email trùng
        $check_query = "SELECT * FROM userbase WHERE username='$username' OR email='$email'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "Tên đăng nhập hoặc email đã tồn tại. Vui lòng chọn tên đăng nhập và email khác.";
        } else {
            // Thêm dữ liệu vào cơ sở dữ liệu (without password hashing)
            $sql = "INSERT INTO userbase (name, username, email, phonenumber, address, password, reenterpassword, AccType) 
                    VALUES ('$name', '$username', '$email', '$phonenumber', '$address', '$password', '$reenterpassword', 'user')";

            if ($conn->query($sql) === TRUE) {
                // Đăng ký thành công, chuyển hướng về trang đăng nhập
                header('Location: login.php');
                exit();
            } else {
                $error_message = "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <center>
            <table>
                <h2>Đăng ký</h2>
                <?php
                    // Display error message if any
                    if (isset($error_message)) {
                        echo '<div style="color: red; font-weight: bold;">' . $error_message . '</div>';
                    }
                ?>
                <form method="post" action="register.php">
                    <div class="form-group">
                        <tr>
                            <td><label for="name">Họ và tên:</label></td>
                            <td><input type="text" id="name" name="name" required></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="username">Tên đăng nhập:</label></td>
                            <td><input type="text" id="username" name="username" required></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" id="email" name="email" required></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="phonenumber">Số điện thoại:</label></td>
                            <td><input type="text" id="phonenumber" name="phonenumber" required></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="address">Địa chỉ:</label></td>
                            <td><input type="text" id="address" name="address" required></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="password">Mật khẩu:</label></td>
                            <td><input type="password" id="password" name="password" required></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="reenterpassword">Nhập lại mật khẩu:</label></td>
                            <td><input type="password" id="reenterpassword" name="reenterpassword" required></td>
                        </tr>
                    </div>
                    <tr></tr>
                    <tr>
                        <td colspan="2" align="center"><button type="submit">Đăng ký</button></td>
                    </tr>
                </form>
            </table>
        </center>
    </div>
    <div class="footer">
        <p>Nguyễn Tùng Lâm 14-10-2002;  Nguyễn Thị Thu hiền 14-03-2002;  Bùi Đình Sỹ Giang 16-10-2002</p>
    </div>
</body>
</html>