<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Two Numbers</title>
</head>
<body>
    <h1>Add Two Numbers</h1>

    <!-- Form to input two numbers -->
    <form method="post" action="">
        <label for="number1">First Number:</label>
        <input type="number" id="number1" name="number1" required><br><br>

        <label for="number2">Second Number:</label>
        <input type="number" id="number2" name="number2" required><br><br>

        <button type="submit">Add</button>
    </form>

    <?php
    // Check if form data is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve input values
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        // Perform addition
        $sum = $number1 + $number2;

        // Display the result
        echo "<h2>Result:</h2>";
        echo "<p>The sum of $number1 and $number2 is $sum.</p>";
    }
    ?>
</body>
</html>
