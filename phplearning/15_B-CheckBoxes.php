<!DOCTYPE html>
<html lang="en">

<head>
    <title>Check Boxes</title>
</head>

<body>
    <form action="./15_B-CheckBoxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">Taco<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

    $foods = $_POST["foods"];
    foreach ($foods as $food) {
        echo ($food) . "<br>";
    }
}
?>