<!DOCTYPE html>
<html>
<head>
    <title>Final Order Registration</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Final Order Registration</h1>

    <?php
    // Retrieve the ordered products from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products WHERE order_column = 1"; // Replace 'your_table' with your actual table name
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        ?>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Actions</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['product_name']; ?></td>
                    <td>
                        <a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br>
        <button onclick="finalizeOrder()">Finalize Order</button>
        <?php
    } else {
        echo "No products found.";
    }

    $conn->close();
    ?>

    <script>
        function finalizeOrder() {
            // Perform any necessary actions before finalizing the order, such as calculations or validations
            
            // Redirect to the final order confirmation page
            window.location.href = "order_confirmation.php";
        }
    </script>
</body>
</html>
