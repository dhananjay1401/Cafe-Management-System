<!-- chef_portal.php -->
<?php
// Fetch pending orders from the database
// Your code to connect to the database and fetch orders goes here
// Sample SQL query: SELECT * FROM orders WHERE status='pending'

// Display pending orders
echo "<h2>Pending Orders</h2>";
echo "<ul>";
while ($row = /* fetch orders from database */) {
    echo "<li>Table: " . $row['table_number'] . " - Items: " . $row['items'] . "</li>";
}
echo "</ul>";
?>
