<!-- order_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Order Form</title>
</head>
<body>
    <h2>Place Order</h2>
    <form action="process_order.php" method="post">
        <label for="table_number">Table Number:</label>
        <input type="text" id="table_number" name="table_number" required><br><br>
        
        <label for="items">Select Items:</label><br>
        <input type="checkbox" id="item1" name="items[]" value="Coffee">
        <label for="item1">Coffee</label><br>
        <input type="checkbox" id="item2" name="items[]" value="Sandwich">
        <label for="item2">Sandwich</label><br>
        <!-- Add more items as needed -->

        <label for="special_request">Special Request:</label><br>
        <textarea id="special_request" name="special_request"></textarea><br><br>

        <input type="submit" value="Submit Order">
    </form>
</body>
</html>
