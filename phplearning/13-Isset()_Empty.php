<!DOCTYPE html>
<html lang="en">

<head>
    <title>ISSET & EMPTY Functions</title>
</head>

<body>
    <form action="./13-Isset()_Empty.php" method="post">
        <label>Username: </label>
        <input type="text" name="username">
        <label>Password: </label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log in">
    </form>
</body>

</html>
<?php

    // foreach($_POST as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

 
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            echo "Username is missing!";

        } elseif(empty($password)){
            echo"Password is missing!";

        }  else {
            echo "Hello! {$username}";
        } 
    }


// isset() = returns TRUE if a variable is declared and not null.
// empty() = Returs TRUE if a variable is not decalared, false, null "".

//ISSET FUNCTION EXAMPLE #1
    // $username = "esorlenra";
    //     echo isset($username);

//ISSET FUNCTION EXAMPLE #2
    // $username = null;
    // echo isset($username);     

 //ISSET FUNCTION EXAMPLE #3 
    // $username = "esorlenra";
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

?>