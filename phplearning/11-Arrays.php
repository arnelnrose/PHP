<?php
/* Array = "Variable" which can hold more than
        one value at a time. */

$foods = array("Apple", "Orange", "Banana", "Coconut");

// $foods[0] = "pineaple";
// array_push($foods, "pineapple");
// array_pop($foods);
// array_shift($foods);
// $reversed_foods = array_reverse($foods);
// echo count($foods);


foreach ($foods as $food) {
    echo $food . "<br>";
}
