<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSET & EMPTY Functions</title>
</head>

<body>
    <form action="./13-Isset()_Empty.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" required>
        <label for="password">Password: </label>
        <input type="password" name="password" required>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php

foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}
if (empty($username)) {
    echo "These credentials do not match our records.";
} else {
    echo "Hello! {$username}";
}

    

// isset() = returns TRUE if a variable is declared an not null.
// empty() = Returs TRUE if a variable is not decalared, false, null "".

//ISSET FUNCTION
// $username = null;
// if (isset($username)) {
//     echo "This variable is set.";
// } else {
//     echo "This variable is not set.";
// }

//EMPTY FUNCTION
// $username = "esorlenra";
// if (empty($username)) {
//     echo "This variable is empty.";
// } else {
//     echo "This variable is not empty.";
// }