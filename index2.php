<?php include 'db2.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empower Mart</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <h1>Welcome to the Empower Mart</h1>
    <div class="products">
        <?php
        $sql = "SELECT id, name, description, price, image FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h2>" . $row["name"] . "</h2>";
                echo "<p>" . $row["description"] . "</p>";
                echo "<p>$" . $row["price"] . "</p>";
                echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>