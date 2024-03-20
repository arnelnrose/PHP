<?php
/*  variable = a reusable conatainer that holds data
    string, integer, float boolean.
*/
        echo "VARIABLES AND DATA TYPES <br><br>";
        //Strings
        $name = "Arnel Rose";
        $food = "pizza";
        $email = "arnelnrose@gmail.com";

        //Integers
        $age = 42;
        $user = 2;
        $quantity = 5;

        //Float
        $gpa = 1.5;
        $price = 4.99;
        $tax_rate = 5.1;

        //Boleans
        $employed = true;
        $online = false;
        $forSale = true;


        // echo $name;
        echo "Hello, I'm {$name} <br>";
        echo "I like {$food}<br>";
        echo "My email is {$email} <br>";
        echo "I am {$age} years old <br>";
        echo "My GPA is {$gpa} <br>";
        echo "My GPA is {$gpa} <br><br>";

        $total = 0;
        echo "You have ordered {$quantity} pieces {$food} <br>";
        $total = $quantity * $price;
        echo "And the total is: {$total}";

       
?>