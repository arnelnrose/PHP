<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validate Input</title>
</head>

<body>
    <form action="./18B-ValidateInput.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="login" value="login">
    </form><br>
</body>

</html>
<?php
if (isset($_POST['login'])) {

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    //    Validating Age
    // if (empty($age)) {
    //     echo "That number wasn't valid.";
    // } else {
    //     echo "You are $age years old.";
    // }

    //    Validating Email
    if (empty($email)) {
        echo "That email wasn't valid.";
    } else {
        echo "Your email is: {$email}";
    }
}
?>