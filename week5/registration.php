<?php
session_start();

/* Kết nối cơ sở dữ liệu */
$con = mysqli_connect('127.0.0.1', 'root', '', 'LoginReg');

if (!$con) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

/* Lấy dữ liệu từ form */
$student_id  = $_POST['student_id'];
$dob         = $_POST['dob']; // dạng YYYY-MM-DD
$nationality = $_POST['nationality'];
$name        = $_POST['user'];
$pass        = $_POST['password'];

/* ⚠️ Không mã hóa mật khẩu */
$plain_pass = $pass;

/* Kiểm tra trùng username */
$s = "SELECT * FROM userReg WHERE name='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "⚠️ Username already exists!";
} else {
    /* Chèn dữ liệu vào bảng (plain text password) */
    $reg = "INSERT INTO userReg (student_id, date_birth, nationality, name, password)
            VALUES ('$student_id', '$dob', '$nationality', '$name', '$plain_pass')";
    
    if (mysqli_query($con, $reg)) {
        echo "✅ Registration successful! Redirecting to login...";
        header("refresh:2;url=login.php"); // tự động chuyển sang login sau 2s
        exit();
    } else {
        echo "❌ Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
