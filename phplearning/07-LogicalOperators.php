<?php
$child = true;
$senior = ftrue;
$ticket = null;

if ($child || $senior) {
    $ticket = 10;
} else {
    $ticket = 15;
}
echo "The ticket price is {$ticket}";

// EXAMPLE #1
// $age = 25;
// $citizen = true;

// if ($age >= 18 || !$citizen) {
//     echo "You cannot vote.";
// } else {
//     echo "You can vote.";
// }


// EXAMPLE #2
// $temp = 35;
// $cloudy = true;

// if ($temp < 0 || $temp > 30) {
//     echo "Today's weather condition 
//     is too hot. <br>";
// } else {
//     echo "The weather is good.";
// }
// echo $cloudy ? "It's sunny." :
//     "It's cloudy.";
