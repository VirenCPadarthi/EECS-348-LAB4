<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>PHP Multiplication Table</h2>

<form method="POST">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = intval($_POST['number']);
    echo "<h3>Multiplication Table for $number</h3>";
    echo "<table>";
    echo "<tr><th>Row/Col</th>";
    for ($col = 1; $col <= $number; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";
    for ($row = 1; $row <= $number; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $number; $col++) {
            echo "<td>" . $row * $col . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
