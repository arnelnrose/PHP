<?php
    include("./24B-Database.php");

        //Retrieving a row from the table  
    /*
    $sql = "SELECT * FROM users WHERE user = 'Spongebob!'";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            echo $row["id"] . "<br/>";
            echo $row["user"] . "<br/>";
            echo $row["reg_date"] . "<br/>";
        }
        else{
            echo "No user found.";
        }
    */
    //Retrieving multiple rows from the table  
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br/>";
            echo $row["user"] . "<br/>";
            echo $row["reg_date"] . "<br/><br/>";
            }    
        }
        else{
            echo "No user found.";
        }
    mysqli_close($conn);
?>