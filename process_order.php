<?php
// Handle order submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table_number = $_POST["table_number"];
    $items = $_POST["items"];
    $special_request = $_POST["special_request"];

    // Process the order (store in database, etc.)
    // Your code to store the order in the database goes here

    // Redirect back to order form with a success message
    header("Location: order_form.php?success=true");
    exit();
}