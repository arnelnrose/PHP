<?php
/* Functions - write some code once, 
    reuse when you need it type () 
    after function name to invoke
    Example: 
    add(), subtract(), multiply() and divide(). */


// Returning values from a function

function generateFullName($first_name, $last_name)
{
    return "{$first_name} {$last_name}";
}

$full_name = generateFullName("Arnel", "Rose");
echo $full_name;
