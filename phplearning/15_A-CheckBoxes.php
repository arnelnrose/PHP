<!DOCTYPE html>
<html lang="en">

<head>
    <title>Check Boxes</title>
</head>

<body>
    <form action="./15_A-CheckBoxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

    if (isset($_POST["pizza"])) {
        echo "You like pizza! <br>";
    }

    if (isset($_POST["hamburger"])) {
        echo "You like hamburger! <br>";
    }

    if (isset($_POST["hotdog"])) {
        echo "You like hotdog! <br>";
    }

    if (isset($_POST["taco"])) {
        echo "You like taco! <br>";
    }

    if (empty($_POST["pizza"])) {
        echo "You don't like pizza! <br>";
    }

    if (empty($_POST["hamburger"])) {
        echo "You don't like hamburger! <br>";
    }

    if (empty($_POST["hotdog"])) {
        echo "You don't like hotdog! <br>";
    }

    if (empty($_POST["taco"])) {
        echo "You don't like taco! <br>";
    }
}
?>