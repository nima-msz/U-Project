<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$productName = $_POST['product'];
$sql = "UPDATE `products` SET `Buy`=0 WHERE `Name`=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $productName);
if ($stmt->execute()) {
    echo "Order updated successfully";
} else {
    echo "Error updating order: " . $conn->error;
}

$stmt->close();
$conn->close();
?>