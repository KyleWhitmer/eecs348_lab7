<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EECS 348 Lab Seven Practice Four</title>
<style>
  table {
    border-collapse: collapse;
    width: 100%;
    max-width: 600px;
  }
  table, th, td {
    border: 1px solid black;
  }
  th, td {
    padding: 5px;
    text-align: left;
  }
</style>
</head>
<body>
    <h1>EECS 348 Lab Seven Practice Four</h1>
    <form method="post" action="practice4.php">
        <label for="size">Size of the multiplication table:</label>
        <input type="number" id="size" name="size">
        <input type="submit" value="Submit">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the size is a number and greater than zero
    $size = isset($_POST['size']) ? intval($_POST['size']) : 0;
    if($size > 0) {
        echo '<table>';
        echo '<tr><th>*</th>';
        for($col = 1; $col <= $size; $col++) {
            echo '<th>' . $col . '</th>';
        }
        echo '</tr>';
        for($row = 1; $row <= $size; $row++) {
            echo '<tr>';
            echo '<td><strong>' . $row . '</strong></td>';
            for($col = 1; $col <= $size; $col++) {
                echo '<td>' . ($row * $col) . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "<p>Please enter a positive integer number.</p>";
    }
}
?>
</body>
</html>
