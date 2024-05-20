<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
</head>

<body>
    <!-- This is the login page.<br />
    <a href="./21A-Session.php">This goes to login page.</a><br /> -->

    <form action="./21A-Index_Session.php" method="post">
        Username:<br />
        <input type="text" name="username"><br />
        Password:<br />
        <input type="password" name="password"><br />
        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>
<?php
/*
    Session -   SGB used to store information on a user
                to be used across multiple pages.
                A user is assigned a session=id
                Ex. login credentials.
*/

if (isset($_POST["login"])) {

    if (
        !empty($_POST["username"]) &&
        $_POST["password"]
    ) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: 21B-Home_Session.php");

        // echo "{$_SESSION["username"]} <br/>";
        // echo "{$_SESSION["password"]} <br/>";
    } else {
        echo "Missing Username or Password.";
    }
}
