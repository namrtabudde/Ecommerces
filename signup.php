<?php
// Include the database connection file
include 'db2.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize using mysqli_real_escape_string
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Perform further processing (e.g., validation, hashing, database insertion)
    // ...
}
?>

