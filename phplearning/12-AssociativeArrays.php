<!DOCTYPE html>
<html lang="en">

<head>

    <title>Associative Arrays</title>
</head>

<body>
    <form action="./12-AssociativeArrays.php" method="post">
        <label for="country">Enter a Country:</label>
        <input type="text" name="country">
        <input type="submit" value="Submit" required>
    </form><br />
</body>

</html>
<?php
/*  Associative Arrays - An array made of
        key => value pairs. 
*/

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "Philippines" => "Manila",
    "South Korea" => "Seoul",
    "India" => "New Delfi"
);

    // EXAMPLE #1: Accessing associate of array.
// foreach ($capitals as $key => $value) {
//     echo "{$key}, {$value} <br>";
// }

// $capitals["USA"] = "Las Vegas";
// $capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);
// $keys = array_keys($capitals);
// $values = array_values($capitals);
// $capitals = array_flip($capitals);


// foreach ($capitals as $key => $value) {
//     echo "{$key}, {$value} <br>";
// }

// foreach ($keys as $key) {
//     echo "{$key} <br/>";
// }

// foreach ($values as $value) {
//     echo "{$value} <br/>";
// }

// array_reverse($capitals);
// foreach ($capitals as $key => $value) {
//     echo "{$key}, {$value} <br/>";
// }

// $capital = $_POST['country'];
// $capital = $capitals[$_POST['country']];


// echo $capital;
// echo "The capital is {$capital}";
