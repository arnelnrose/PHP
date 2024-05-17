<?php
/*
        Logical Operator - combine conditional statements
        if(conditiona1 && condition2) 

        && = True if both conditions are true.
        || = True if at least one condition is true.
        !  = True if flase. False is true.
    */
/* EXAMPLE #1
$temp = 31;

if ($temp >= 00 && $temp <= 30) {
    echo "The weather is good.";
} else {
    echo "The weather is bad.";
}
*/

/* EXAMPLE #2
$temp = 25;
if ($temp < 0 || $temp > 30) {
    echo "The weather is bad.";
} else {
    echo "The weather is good.";
};
*/

/* EXAMPLE #3
$temp = 25;
$cloudy = false;

if ($temp < 0 || $temp > 30) {
    echo "The weather is bad. <br/>";
} else {
    echo "The weather is good. <br/>";
}

if (!$cloudy) {
    echo "It's sunny. <br/>";
} else {
    echo "It's cloudy. <br/>";
}
*/

/* EXAMPLE #4
$age = 17;
$citizen = true;
if ($age >= 18 && $citizen) {
    echo " You can vote";
} else {
    echo "You cannot vote";
}
*/

/* EXAMPLE #5
$age = 18;
$citizen = true;
if (!$age >= 18 && !$citizen) {
    echo " You cannot vote";
} else {
    echo "You can vote";
}
*/

// EXAMPLE #4
$child = true;
$senior = true;
$ticket = null;

if (@$child || !$senior) {
    $ticket = 10;
} else {
    $ticket = 15;
}

echo "The ticket price is \${$ticket}";
