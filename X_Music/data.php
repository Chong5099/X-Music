<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "x_music"; // 数据库名

// 创建连接
$conn = new mysqli($servername, $username, $password, $database);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取 POST 数据并防止 SQL 注入
$nama = $conn->real_escape_string($_POST['nama']);
$telephone_number = $conn->real_escape_string($_POST['telephone_number']);
$address = $conn->real_escape_string($_POST['address']);
$card_number = $conn->real_escape_string($_POST['card_number']);
$product_name = $conn->real_escape_string($_POST['product_name']);
$purchase_time = $conn->real_escape_string($_POST['purchase_time']);

// 插入数据到 x_music_payment 表（6个字段）
$sql = "INSERT INTO x_music_payment 
        (nama, telephone_number, address, card_number, product_name, purchase_time) 
        VALUES 
        ('$nama', '$telephone_number', '$address', '$card_number', '$product_name', '$purchase_time')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Checkout complete');</script>";
    echo "<script>window.setTimeout(function(){ window.location.href = 'index.html'; }, 1000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
