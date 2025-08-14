<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "x_music";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取 POST 数据
$nama = $conn->real_escape_string($_POST['nama']);
$email = $conn->real_escape_string($_POST['email']);
$opinion = $conn->real_escape_string($_POST['opinion']);
$feedback_time = $conn->real_escape_string($_POST['feedback_time']);

// 插入数据
$sql = "INSERT INTO x_music_feedback (nama, email, opinion, feedback_time) 
        VALUES ('$nama', '$email', '$opinion', '$feedback_time')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Feedback submitted successfully!');</script>";
    echo "<script>window.setTimeout(function(){ window.location.href = 'index.html'; }, 1000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
