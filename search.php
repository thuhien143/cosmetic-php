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
            <?php include 'logged.php'; ?>
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
    <?php
        // Nếu có dữ liệu tìm kiếm được gửi từ form
        if (isset($_GET['search'])) {
            $search_term = $_GET['search'];

            // Tìm kiếm trong cơ sở dữ liệu hoặc tập tin sản phẩm
            // Điều này cần điều chỉnh phụ thuộc vào cách bạn lưu trữ sản phẩm

            // Ví dụ tìm kiếm trong cơ sở dữ liệu
            $conn = mysqli_connect("localhost", "root", "", "qlmypham");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM sanpham WHERE ten_sp LIKE '%$search_term%'";
            $result = mysqli_query($conn, $sql);

            $search_results = array();

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $search_results[] = $row;
                }
            }

            mysqli_close($conn);

            // Hiển thị kết quả tìm kiếm
            if (!empty($search_results)) {
                echo "<h2>Kết quả tìm kiếm cho '$search_term':</h2>";
                echo "<div class='products'>";

                foreach ($search_results as $product) {
                    // Add a link around each product
                    echo "<a href='details.php?ma_sp={$product['ma_sp']}' class='product-link'>";
                    echo "<div class='product'>";
                    echo "<img src='pictureMyPham/{$product['ma_sp']}.png' alt='{$product['ten_sp']}' />";
                    echo "<div class='product-info'>";
                    echo "<h3>{$product['ten_sp']}</h3>";

                    // Replace 'description' with the appropriate field name if it's not present
                    if (isset($product['gia_ban'])) {
                        echo "<p>{$product['gia_ban']} VND</p>";
                    } else {
                        echo "<p>Description not available</p>";
                    }

                    echo "</div>";
                    echo "</div>";
                    echo "</a>";
                }

                echo "</div>";
            } else {
                echo "<p>Không tìm thấy sản phẩm nào.</p>";
            }
        }
    ?>
    </div>
	<div class="footer">
		<p>Nguyễn Tùng Lâm 14-10-2002;  Nguyễn Thị Thu hiền 14-03-2002;  Bùi Đình Sỹ Giang 16-10-2002</p>
	</div>
</body>
</html>