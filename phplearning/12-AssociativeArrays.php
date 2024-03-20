<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>

<body>
    <form action="./12-AssociativeArrays.php" method="post">
        <label for="country">Enter a Country:</label>
        <input type="text" name="country">
        <input type="submit" value="Submit" required>
    </form>
</body>

</html>
<?php
/*  Associative Arrays - An array made of
        key => value pairs. */

$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "Philippines" => "Manila",
    "South Korea" => "Seoul"
);
$capital = $_POST['country'];
$capital = $capitals[$_POST['country']];


echo $capital;
echo "The capital is {$capital}";


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

// foreach ($capitals as $key => $value) {
//     echo "{$key}, {$value} <br>";
// }
