<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
</head>

<body>
    This is the home page.<br />
    <!-- <a href="./21A-Login_Session.php">This goes to login page.</a><br /> -->

    <form action="./21B-Home_Session.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>

</body>

</html>
<?php

echo "{$_SESSION["username"]} <br/>";
echo "{$_SESSION["password"]} <br/>";

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: 21A-Login_Session.php");
}
?>
