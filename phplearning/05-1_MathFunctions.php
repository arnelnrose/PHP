<!DOCTYPE html>
<html lang="en">

<head>
    <title>Math Functions</title>
</head>

<body>

    <!-- <form action="./05-1_MathFunctions.php" method="post">
        <label>x</label>
        <input type="text" name="x"><br><br>
        <label>y</label>
        <input type="text" name="y"><br><br>
        <label>z</label>
        <input type="text" name="z"><br><br>
        <input type="submit" value="total">
    </form> -->

    <form action="./05-1_MathFunctions.php" method="post">

        <label>Radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">

    </form><br />

</body>

</html>
<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x, $y);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(1, 5);

// echo $total;


$radius = $_POST["radius"];
$circumference =  null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area =  round($area, 2);

$volume =  4 / 3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference}cm <br>";
echo "Area =  {$area}cm^2 <br/>";
echo "Volume = {$volume}cm^3";

?>