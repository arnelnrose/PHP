<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP_SELF</title>
</head>

<body>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Username:<br />
        <input type="text" name="username"><br />
        Password:<br />
        <input type="password" name="password"><br /><br />
        <input type="submit" name="login" value="Login"><br /><br />
    </form>

</body>

</html>
<?php
/*
        $_SERVER - SGB that conatains headers, path, and script locations.
        The entries in this array are created by the wev server.
        Shows nearly everything you need to know about the current web page environment.
    */
/* 
foreach ($_SERVER as $key => $value) {
    echo "{$key} = {$value} <br/>";
}
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello, World!";
}
