<!-- $_GET = Data is append to the URL
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET and POS</title>
    </head>
<body>     
    <form action="04-GET_POST.php" method="post">
        <label>quantity:</label>
        <input type="text" name="quantity" required>
        <input type="submit" value="total">
    </form>
</body>
</html>    
<?php
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";
    $item = "pizza";
    $price = 1179.75;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;
    $formatted_total = number_format($total, 2, '.', ',');
    
    echo "You have ordered <br> Hawaiian Delight Pizza {$quantity} x {$item}/s <br>";
    echo "Total: ₱{$formatted_total}";   
?>