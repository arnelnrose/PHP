<!--$_GE and $_POST - special variables used to 
    collect data is sent to the file in the action attribute of <form>
        Example: 
            <form action="file.php method="get"/>
    
    $_GET = Data is append to the URL
            NOT SECURE
            char limit 
            Bookmark is possible with values
            GET requests can be cached
            Better for search page 
        
    $_POST = Data is packaged inside the body of HTTP
            MORE SECURE
            No Data limit 
            Cannot bookmark 
            requests are not cached
            Better for submitting credential. -->

<!-- EXAMPLE #1 -->
<!-- <form action="04-GET_POST.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Log in">
    </form> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GET and POS</title>
</head>

<body>
    <!-- <form action="./04-GET_POST.php" method="post">
        <label for="username">username:</label><br />
        <input type="text" name="username"><br />
        <label for="password">password:</label><br />
        <input type="password" name="password"><br /><br />
        <input type="submit" value="Login">
    </form> -->

    <form action="./04-GET_POST.php" method="post">
        <label>Quantity:</label><br />
        <input type="text" name="quantity" required><br />
        <input type="submit" value="Total"><br />

    </form>
</body>

</html>
<?php
// echo "{$_POST["username"]} <br />";
// echo "{$_POST["password"]}";

$item = "Pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total =  $quantity * $price;

echo "You have ordered {$quantity} x {$item}s <br/>";
echo "Your total is: \${$total}";

?>