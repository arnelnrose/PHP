<!DOCTYPE html>
<html lang="en">

<head>
    <title>For Loop</title>
</head>

<body>
    <form action="./09-Forloop.php" method="post">
        <label>Enter a number to count:</label>
        <input type="text" name="counter" />
        <input type="submit" value="start" />
    </form>

</body>

</html>

<?php

// FOR LOOP - repeat some code a certain # of times

/*   EXAMPLE #1
for ($i = 0; $i < 5; $i++) {
    echo "Hello World <br/>";
}
*/

/*   EXAMPLE #2
for ($i = 0; $i <= 5; $i++) {
    echo "{$i} <br/>";
}
*/

/* EXAMPLE #3
$counter = $_POST["counter"];

for ($i = 0; $i <= $counter; $i++) {
    echo "{$i} <br/>";
}
*/
// EXAMPLE #4 Count down from:
$counter = $_POST["counter"];

for ($i = $counter; $i >= 0; $i--) {
    echo "{$i} <br/>";
}

?>