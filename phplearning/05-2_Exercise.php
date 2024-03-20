<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05. Exercise</title>
</head>
<body>
    <form action="05-2_Exercise.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius" required>
        <input type="submit" value="calculate">
    </form>
    
</body>
</html>
<?php

    // $radius = $_POST["radius"];
    // $circumference = null;
    // $volume = null;

    // $circumference = 2 * pi () * $radius;
    // $circumference = round($circumference, 2);
    
    // $area = pi() * pow($radius,2);
    // $area = round($area, 2);
    // $volume = 4/3 * pi() * pow($radius, 3);
    // $volume = round($volume, 2);
   
    // echo "Circumference = {$circumference}cm <br>";
    // echo "Area = {$area}cm^2 <br>";
    // echo "Volume = {$volume}cm^3 <br>";

    $radius = $_POST["radius"];

$circumference = round(2 * M_PI * $radius, 2);
$area = round(M_PI * pow($radius, 2), 2);
$volume = round((4/3) * M_PI * pow($radius, 3), 2);

echo "Circumference = {$circumference}cm <br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume = {$volume}cm^3 <br>";

?>