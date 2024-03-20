<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>

<body>
    <form action="" method="post">
        <label for="counter">Enter a number to count:</label>
        <input type="text" name="counter" required>
        <input type="submit" value="Count">
    </form>

</body>

</html>

<?php
if (isset($_POST["counter"])) {
    $counter = $_POST["counter"];
    if (!is_numeric($counter)) {
        echo "Please input a valid number.  <br>";
    } else {
        for ($i = 0; $i <= $counter; $i++) {
            echo "Index: $i <br>";
        }
    }
}
