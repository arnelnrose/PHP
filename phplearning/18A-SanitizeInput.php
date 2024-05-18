<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sanitize Input</title>
</head>

<body>
    <form action="./18-Sanitize_Validate_input.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br><br>
        <input type="submit" name="login" value="login"><br>
        email: <br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="login" value="login">
    </form><br>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age =  filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email =  filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "You're username is {$username} <br>";
    echo "You are {$age} years old <br>";
    echo "You're email is {$email} <br>";
}
?>