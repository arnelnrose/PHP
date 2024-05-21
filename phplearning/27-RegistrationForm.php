<?php
    include("./24B-Database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Welcome to Fakebook!</h1>
    <form action="<?php htmlspecialchars( $_SERVER["PHP_SELF"]) ?>" method="post">
        Username:<br/>
        <input type="text" name="username"><br/>
        Password:<br/>
        <input type="password" name="password"><br/><br/>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" ){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if(empty($username)){
            echo "Please enter a username!";
        }
        elseif(empty($password)){
            echo "Please enter your password!";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

            // mysqli_query($conn, $sql);
            // echo "You are now registered!";

            try{
                mysqli_query($conn, $sql);
                echo "You are now registered!";
            }
            catch(mysqli_sql_exception){
                echo "Username is taken!";
            }
           
        }
    }
    mysqli_close($conn);
?>