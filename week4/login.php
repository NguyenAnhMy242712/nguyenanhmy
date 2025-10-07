<?php
session_start();
include("db_connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        echo ("<p style='color:green; text-align:center;'>Connect successful!</p>");
    } else {
        echo ("<p style='color:red; text-align:center;'>Wrong info!</p>");
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .note {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Đăng nhập</h2>
        <form method="POST" action="">
            <label>Tên đăng nhập:</label>
            <input type="text" name="username" placeholder="Nhập username..." required>

            <label>Mật khẩu:</label>
            <input type="password" name="password" placeholder="Nhập password..." required>

            <button type="submit" name="login">Đăng nhập</button>
        </form>
        <div class="note">
            Tài khoản test: <b>admin</b> / <b>123456</b>
        </div>
    </div>
</body>
</html>
