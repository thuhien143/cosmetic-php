<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" type="text/css" href="Astyle.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <center>
    <h2>Trang Admin</h2>
    <button type="button" onclick="loadPage('user-display.php')">Quản lý Người Dùng</button>
    <button type="button" onclick="loadPage('display.php')">Quản lý Sản Phẩm</button>
    <button type="button" onclick="loadPage('feedback.php')">Quản lý Feedback</button>
    </center>
    <div id="content"></div>

    <script>
        $(document).ready(function() {
            loadPage('display.php');
        });

        function loadPage(page) {
            $.ajax({
                url: page,
                type: 'GET',
                success: function(response) {
                    $('#content').html(response);
                },
                error: function() {
                    alert('Lỗi khi tải trang ' + page);
                }
            });
        }
    </script>
</body>
</html>
