<?php
    // Connect to your database
    $conn = mysqli_connect("localhost", "root", "", "qlmypham");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the product ID from the query parameter
    $ma_sp = $_GET['ma_sp'];

    // Query to fetch product details based on $ma_sp
    $sql = "SELECT * FROM sanpham WHERE ma_sp = '$ma_sp'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch data from the result set
        $productDetails = mysqli_fetch_assoc($result);

        // Close the connection
        mysqli_close($conn);
    } else {
        // Handle the case where the query fails
        die("Error fetching product details: " . mysqli_error($conn));
    }

    // Function to sanitize the input for security
    function sanitizeInput($data) {
        return htmlspecialchars(strip_tags($data));
    }

    // Check if the 'addToCart' parameter is set
    if (isset($_GET['addToCart'])) {
        // Get the selected product details
        $selectedProductID = sanitizeInput($productDetails['ma_sp']);
        $selectedProductName = sanitizeInput($productDetails['ten_sp']);
        $selectedProductPrice = sanitizeInput($productDetails['gia_ban']);
        $selectedQuantity = isset($_GET['quantity']) ? (int)$_GET['quantity'] : 1;

        // Store the selected product details in a session variable
        $_SESSION['cart'][] = array(
            'productID' => $selectedProductID,
            'productName' => $selectedProductName,
            'productPrice' => $selectedProductPrice,
            'quantity' => $selectedQuantity
        );
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang web của tôi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    .content {
        margin-bottom: 110px;
    }

    .product-details {
        display: flex;
        justify-content: center; 
        position: relative;
    }

    .product-details img {
        width: 300px;
        height: auto;
        margin-right: 20px;
        top: 0;
    }

    .product-info {
        max-width: 1200px;
        background-color : #0c0c0c;
    }

    .product-info h3 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #fff;
    }

    .product-info p {
        font-size: 16px;
        margin-bottom: 10px;
        color: #fff; 
    }

    .product-info button {
        background-color: #ffd700; 
        color: #000;
        padding: 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .product-info button:hover {
        background-color: #fff;
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
        <div class="product-details">
            <img src="pictureMyPham/<?php echo $productDetails['ma_sp']; ?>.png" alt="<?php echo $productDetails['ten_sp']; ?>" />
            <div class="product-info">
                <h3><?php echo $productDetails['ten_sp']; ?></h3>
                <p>Loại sản phẩm: <?php echo $productDetails['loaihang']; ?></p>
                <p>Mô tả sản phẩm: <?php echo $productDetails['chi_tiet']; ?></p>  
                <p>Giá bán: <?php echo number_format($productDetails['gia_ban']) . ' VND'; ?></p>

                <?php
                // Kiểm tra xem người dùng đã đăng nhập hay chưa
                if (isset($_SESSION['username'])) {
                    // Người dùng đã đăng nhập
                    // Hiển thị nút "Mua hàng" khi đã đăng nhập
                    echo '<form action="cart.php" method="get"> 
                            <input type="hidden" name="addToCart" value="true">
                            <input type="hidden" name="ma_sp" value="' . $productDetails['ma_sp'] . '">
                            <label for="quantity">Số lượng:</label>
                            <button type="button" onclick="updateQuantity(\'decrease\')">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" style="width: 50px;">
                            <button type="button" onclick="updateQuantity(\'increase\')">+</button>
                            <input type="hidden" name="quantity_hidden" id="quantity-hidden" value="1">
                            <button type="submit">Mua hàng</button>
                        </form>';
                } else {
                    // Người dùng chưa đăng nhập
                }
                ?>
            </div>
        </div>
        <script>
            // Hàm thay đổi giá trị của trường input số lượng
            function updateQuantity(operation) {
                // Lấy giá trị hiện tại của trường input
                var quantityInput = document.getElementById('quantity');
                var quantityHiddenInput = document.getElementById('quantity-hidden');
                var currentQuantity = parseInt(quantityInput.value);

                // Thực hiện thay đổi dựa trên phép toán được truyền vào (tăng hoặc giảm)
                if (operation === 'increase') {
                    quantityInput.value = currentQuantity + 1;
                } else if (operation === 'decrease' && currentQuantity > 1) {
                    quantityInput.value = currentQuantity - 1;
                }

                // Cập nhật giá trị ẩn để gửi đi
                quantityHiddenInput.value = quantityInput.value;
            }
        </script>
    </div>
    <div class="footer">
        <p>Nguyễn Tùng Lâm 14-10-2002;  Nguyễn Thị Thu hiền 14-03-2002;  Bùi Đình Sỹ Giang 16-10-2002</p>
    </div>
</body>
</html>
