<?php
$conn = mysqli_connect("localhost", "root", "", "qlmypham");

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $reenterpassword = $_POST['reenterpassword'];
    $accType = $_POST['AccType'];

    $sql = "INSERT INTO userbase (name, username, email, phonenumber, address, password, reenterpassword, AccType) VALUES ('$name', '$username', '$email', '$phonenumber', '$address', '$password', '$reenterpassword', '$accType')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm người dùng thành công";
        header("Location: user-display.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Người Dùng</title>
</head>
<body>
    <h2>Thêm Người Dùng</h2>
    <form id="userForm" action="user-add.php" method="post" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td><label for="phonenumber">Phone Number:</label></td>
                <td><input type="text" name="phonenumber" required></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="text" name="password" required></td>
            </tr>
            <tr>
                <td><label for="reenterpassword">Re-enter Password:</label></td>
                <td><input type="text" name="reenterpassword" required></td>
            </tr>
            <tr>
                <td><label for="AccType">Account Type:</label></td>
                <td><input type="text" name="AccType" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Thêm">
                    <input type="reset" value="Reset">
                    <a href="user-display.php"><button type="button">Quay lại</button></a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
