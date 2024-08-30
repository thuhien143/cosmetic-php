<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Người Dùng</title>
</head>
<body>
    <h2>Sửa Người Dùng</h2>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "qlmypham");

        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $address = $_POST["address"];
            $password = $_POST["password"];
            $reenterpassword = $_POST["reenterpassword"];
            $AccType = $_POST["AccType"];

            // Xử lý cập nhật trong CSDL
            $sql_update = "UPDATE userbase SET name='$name', email='$email', phonenumber='$phonenumber', address='$address', password='$password', reenterpassword='$reenterpassword', AccType='$AccType' WHERE username='$username'";
            
            if (mysqli_query($conn, $sql_update)) {
                echo "Cập nhật người dùng thành công.";
            } else {
                echo "Lỗi cập nhật người dùng: " . mysqli_error($conn);
            }
        }

        $updatedUsername = $_GET['username'];
        $sql = "SELECT * FROM userbase WHERE username = '$updatedUsername'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" value="<?php echo $row['username']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phonenumber" value="<?php echo $row['phonenumber']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Re-enter Password:</td>
                        <td><input type="text" name="reenterpassword" value="<?php echo $row['reenterpassword']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Account Type:</td>
                        <td><input type="text" name="AccType" value="<?php echo $row['AccType']; ?>"></td>
                    </tr>
                </table>
                <input type="submit" value="Cập nhật">
                <a href="user-display.php"><button type="button">Quay lại</button></a>
            </form>
    <?php
        } else {
            echo "Không tìm thấy người dùng.";
        }

        mysqli_close($conn);
    ?>
</body>
</html>
