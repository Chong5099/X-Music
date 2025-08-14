<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Payments & Feedback</title>
    <link rel="stylesheet" href="admin.css"> <!-- 样式文件 -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            margin-top: 40px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

    <h2>Payment Records</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Card Number</th>
            <th>Product Name</th>
            <th>Purchase Time</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "x_music";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT nama, telephone_number, address, card_number, product_name, purchase_time FROM x_music_payment";
        $result = $conn->query($sql);
        $serialNumber = 1;

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$serialNumber}</td>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['telephone_number']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['card_number']}</td>";
                echo "<td>{$row['product_name']}</td>";
                echo "<td>{$row['purchase_time']}</td>";
                echo "</tr>";
                $serialNumber++;
            }
        } else {
            echo "<tr><td colspan='5'>No payments found.</td></tr>";
        }
        ?>
    </table>

    <h2>Feedback Records</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Opinion</th>
            <th>Feedback Time</th>
        </tr>
        <?php
        $sql = "SELECT nama, email, opinion, feedback_time FROM x_music_feedback";
        $result = $conn->query($sql);
        $serialNumber = 1;

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$serialNumber}</td>";
                echo "<td>{$row['nama']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['opinion']}</td>";
                echo "<td>{$row['feedback_time']}</td>";
                echo "</tr>";
                $serialNumber++;
            }
        } else {
            echo "<tr><td colspan='4'>No feedback found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>

</body>
</html>
