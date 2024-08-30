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
        <h2>Danh sách mỹ phẩm cho: Face</h2>
        <div class="product-categories" id="product-categories-container"></div>
        <script>
            // Fetch data using JavaScript
            fetch('config.php')
                .then(response => response.json())
                .then(products => {
                    const productCategoriesContainer = document.getElementById('product-categories-container');

                    // Filter products by specific categories
                    const allowedCategories = ['Kem nền', 'Kem lót', 'Kem che khuyết điểm', 'Phấn phủ'];

                    // Group products by category
                    const productsByCategory = {};
                    products.forEach(product => {
                        if (allowedCategories.includes(product.loaihang)) {
                            if (!productsByCategory[product.loaihang]) {
                                productsByCategory[product.loaihang] = [];
                            }
                            productsByCategory[product.loaihang].push(product);
                        }
                    });

                    // Loop through the categories and create HTML elements
                    for (const category in productsByCategory) {
                        const categorySection = document.createElement('div');
                        categorySection.className = 'category-section';

                        const categoryTitle = document.createElement('h3');
                        categoryTitle.textContent = category;
                        categorySection.appendChild(categoryTitle);

                        const categoryProducts = productsByCategory[category];
                        const categoryProductContainer = document.createElement('div');
                        categoryProductContainer.className = 'products';

                        // Loop through the products in the category
                        categoryProducts.forEach(product => {
                            const productElement = document.createElement('div');
                            productElement.className = 'product';

                            const imgElement = document.createElement('img');
                            imgElement.src = `pictureMyPham/${product.ma_sp}.png`;

                            const productInfoElement = document.createElement('div');
                            productInfoElement.className = 'product-info';

                            const h3Element = document.createElement('h3');
                            h3Element.textContent = product.ten_sp;

                            const pElement = document.createElement('p');
                            pElement.textContent = `${product.gia_ban} VND`;

                            // Create a link around the product information
                            const productLink = document.createElement('a');
                            productLink.href = `details.php?ma_sp=${product.ma_sp}`;

                            // Append elements to the product container
                            productLink.appendChild(imgElement);
                            productInfoElement.appendChild(h3Element);
                            productInfoElement.appendChild(pElement);
                            productLink.appendChild(productInfoElement);

                            productElement.appendChild(productLink);
                            categoryProductContainer.appendChild(productElement);
                        });

                        categorySection.appendChild(categoryProductContainer);
                        productCategoriesContainer.appendChild(categorySection);
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
        </script>
    </div>
    <div class="footer">
        <p>Nguyễn Tùng Lâm 14-10-2002;  Nguyễn Thị Thu hiền 14-03-2002;  Bùi Đình Sỹ Giang 16-10-2002</p>
    </div>
</body>
</html>
