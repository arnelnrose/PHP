<?php
/* Functions - write some code once, 
    reuse when you need it type () after function name to invoke
    Example: add(), subtract(), multiply() and divide(). */

function hypotenuse(float $a, float $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

echo hypotenuse(2, 4);

    // EXAMPLE #2
// function is_even($number)
// {
//     $result = $number % 2;
//     return $result;
// }
// echo is_even(10);

// EXAMPLE #2
/* function happy_birthday($first_name, $age)
{
    echo "Happy Birthday dear {$first_name} <br>";
    echo "Happy Birthday to you! <br>";
    echo "Happy Birthday dear {$first_name} <br>";
    echo "You are {$age} years old! <br><br>";
}

happy_birthday("Spongebob", 42);
happy_birthday("Patrick", 35);
happy_birthday("Squidward", 45); */
