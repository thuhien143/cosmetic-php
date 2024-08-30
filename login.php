<?php         
    session_start(); // Start the session at the beginning of your script

    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "qlmypham");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch data from the database
    $sql = "SELECT * FROM userbase";
    $result = mysqli_query($conn, $sql);

    // Store the data in an array
    $users = array(); // Correct variable name
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    }

    // Close the database connection
    mysqli_close($conn);

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Check if the username and password are correct
        $is_correct = false;
        $accType = ''; // Initialize accType variable
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $is_correct = true;
                $accType = $user['AccType']; // Get AccType value
                break;
            }
        }
    
        // Display success message if login is successful
        if ($is_correct) {
            $_SESSION['username'] = $username;
            if ($accType === 'admin') {
                echo '<script>';
                echo 'window.open("database/admin.php", "_blank");';
                echo 'window.location.href = "HomePage.php";';
                echo '</script>';
            } else {
                header('Location: cart.php');
            }
            exit();
        } else {
            // Display error message if login fails
            echo '<p class="error">Incorrect username or password.</p>';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang web của tôi</title>
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
            <li><a>Đăng nhập</a></li>
			<li><a href="contact.php">Liên hệ</a></li>
		</ul>
		<div class="top-menu-right">
			<form method="get" action="search.php">
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
			<h2>đăng nhập</h2>
			<form method="post" action="login.php">
				<div class="form-group">
					<tr>
						<td><label for="username">Tên đăng nhập:</label></td>
						<td><input type="text" id="username" name="username" required></td>
					</tr>
				</div>

				<div class="form-group">
					<tr>
						<td><label for="password">Mật khẩu:</label></td>
						<td><input type="password" id="password" name="password" required></td>
					</tr>
				</div>
				<tr></tr>
				<tr>	
					<td><button type="submit">Đăng nhập</button></td>
					<td><button onclick="window.location.href='register.php'">Đăng ký</button></td>
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