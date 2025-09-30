<?php
include "connection.php";
?>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LaptopShop";   

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT LaptopID, Brand, Model, Processor, RAM, Storage, Price, Quantity, ReleaseYear FROM Laptops";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Danh sách Laptop</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Processor</th>
            <th>RAM (GB)</th>
            <th>Storage</th>
            <th>Price ($)</th>
            <th>Quantity</th>
            <th>Release Year</th>
          </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["LaptopID"]."</td>
                <td>".$row["Brand"]."</td>
                <td>".$row["Model"]."</td>
                <td>".$row["Processor"]."</td>
                <td>".$row["RAM"]."</td>
                <td>".$row["Storage"]."</td>
                <td>".$row["Price"]."</td>
                <td>".$row["Quantity"]."</td>
                <td>".$row["ReleaseYear"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Chưa có dữ liệu laptop.";
}

$conn->close();
?>
