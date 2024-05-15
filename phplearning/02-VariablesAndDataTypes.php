<?php
/*  
    variable = a reusable conatainer that holds data
    string, integer, float boolean.
*/

//  VARIABLES AND DATA TYPES
//  STRING
$name = "Arnel Rose";
$food = "Pizza";
$email = "fake143@gmail.com";

// INTEGER
$age = 25;
$users = 3;
$quantity = ;

// FLOAT
$gpa = 1.8;
$price = 4.99;
$tax_rate = 5.1;

// BOOLEAN
$employed = true;
$online = false;
$for_sale = true;

$total = null;

echo "Hello, {$name} <br>";
echo "You Like {$food} <br>";
echo "Your email is {$email}<br><br>";

echo "You are {$age} years old <br>";
echo "The are {$users} users online <br>";
echo "You would like to buy {$quantity} items <br><br>";

echo "Your gpa is: {$gpa} <br>";
echo "Your pizza is \${$price} <br>";
echo "The sales tax rate is: {$tax_rate} <br>";
echo "Online status: {$online} <br><br>";

echo "You have ordered {$quantity} x {$food}s <br>";
$total =  $quantity * $price;

echo "Your total is: \${$total}";
