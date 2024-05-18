<?php
/* Functions - write some code once, 
    reuse when you need it type () 
    after function name to invoke
    Example: 
    add(), subtract(), multiply() and divide(). */

function happy_birthday($firstName, $age)
{
    echo "Happy Birthday dear {$firstName}! <br/>";
    echo "Happy Birthday to you! <br/>";
    echo "Happy Birthday dear {$firstName}! <br/>";
    echo "You are {$age} years old! <br/><br/>";

    return;
}
happy_birthday("Spongebob", 30);
happy_birthday("patrick", 35);
happy_birthday("Squidward", 36);
