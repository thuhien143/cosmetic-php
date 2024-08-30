<?php
// Start the session
session_start();

// Connect to your database
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to sanitize the input for security
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags($data));
}

// Check if the 'addToCart' parameter is set
if (isset($_GET['addToCart'])) {
    // Get the selected product details
    $selectedProductID = sanitizeInput($_GET['ma_sp']);

    // Query to fetch product details based on $selectedProductID
    $sql = "SELECT * FROM sanpham WHERE ma_sp = '$selectedProductID'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch data from the result set
        $productDetails = mysqli_fetch_assoc($result);

        // Get the product details
        $selectedProductName = sanitizeInput($productDetails['ten_sp']);
        $selectedProductPrice = sanitizeInput($productDetails['gia_ban']);
        $selectedQuantity = isset($_GET['quantity']) ? (int)$_GET['quantity'] : 1;

        // Check if there is enough quantity in stock
        $availableQuantity = $productDetails['so_luong'];
        if ($selectedQuantity > $availableQuantity) {
            die("Không đủ số lượng trong kho.");
        }

        // Store the selected product details in a session variable
        $_SESSION['cart'][] = array(
            'productID' => $selectedProductID,
            'productName' => $selectedProductName,
            'productPrice' => $selectedProductPrice,
            'quantity' => $selectedQuantity
        );
    } else {
        // Handle the case where the query fails
        die("Error fetching product details: " . mysqli_error($conn));
    }
}

// Check if the 'removeFromCart' parameter is set
if (isset($_GET['removeFromCart'])) {
    $removeProductID = sanitizeInput($_GET['removeProductID']);
    
    // Remove the product from the cart
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $product) {
            if ($product['productID'] == $removeProductID) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
}

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang web của tôi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .product-details {
            display: flex;
            align-items: center;
        }

        .product-details img {
            width: 100px;
            height: auto;
            margin-right: 20px; 
        }

        .product-info {
            max-width: 400px;
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
            <li><a href="logout.php">Đăng xuất</a></li>
            <li><a href="cart.php">Giỏ hàng</a></li>
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
        <div class="cart-container">
            <h2>Giỏ hàng của bạn</h2>
            <?php
            // Display the selected products in the cart
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $product) {
                    $totalPrice = $product['quantity'] * $product['productPrice'];

                    echo "<div class='cart-item'>";
                    echo "<img src='pictureMyPham/{$product['productID']}.png' alt='{$product['productName']}' />";
                    echo "<div>{$product['productName']} - Số lượng: {$product['quantity']} - Thành tiền: {$totalPrice} VND</div>";
                    echo "<button class='remove-button' onclick='removeFromCart(\"{$product['productID']}\")'>Hủy đơn hàng</button>";
                    echo "</div>";
                }
            } else {
                echo "<p>Giỏ hàng của bạn trống.</p>";
            }
            ?>
        </div>
        <script>
            function removeFromCart(productID) {
                // Redirect to the same page with the removeProductID parameter
                window.location.href = 'cart.php?removeFromCart=true&removeProductID=' + productID;
            }
        </script>
    </div>
    <div class="footer">
        <p>Nguyễn Tùng Lâm 14-10-2002;  Nguyễn Thị Thu hiền 14-03-2002;  Bùi Đình Sỹ Giang 16-10-2002</p>
    </div>
</body>
</html>
