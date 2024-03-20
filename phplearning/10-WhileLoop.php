<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Watch</title>
</head>

<body>

    <form action="./10.WhileLoop.php" method="post">
        <input type="submit" name="stop" value="Stop">
    </form>

</body>

</html>

<?php
/* While Loop - do some code infinitely while
    some condition remains true. */
// $counter = 0;
// while ($counter <= 10) {
//     $counter++;
//     echo $counter . "<br>";
// }

$seconds = 60;
$running = true;
while ($running) {

    if (isset($_POST['stop'])) {
        $running = false;
    } else {
        // waiting for 1 second.
        $seconds++;
        echo $seconds . "<br>";
    }
}
