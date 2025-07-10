<?php

// Method 1 :  without using loop

function sumOfNaturalNumbers($n) {
    return ($n * ($n + 1)) / 2;
}

$n = 100;
echo "Sum of first $n natural numbers: " . sumOfNaturalNumbers($n);

/*

// Method 2 : Using loop 

function sumUsingLoop($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

// Example
$n = 10;
echo "Sum of first $n natural numbers: " . sumUsingLoop($n);

*/

?>