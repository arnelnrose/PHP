<?php
include("./24B-Database.php");

$sql = "INSERT INTO users (user, password) 
            VALUES ('Spongebob', 'pineapple1')";
mysqli_query($conn, $sql);
mysqli_close($conn);
