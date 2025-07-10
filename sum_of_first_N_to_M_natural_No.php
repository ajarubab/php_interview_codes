<?php

// Method 1 :  without using loop

/*
function sumFromNtoM($n, $m) {
    if ($n > $m) return 0; // invalid range
    return ($m * ($m + 1)) / 2 - (($n - 1) * $n) / 2;
}

$n = 50;
$m = 90;
echo "Sum from $n to $m is: " . sumFromNtoM($n, $m);
*/

/*

// Method 2 : Using loop 

function sumFromNtoMLoop($n, $m) {
    $sum = 0;
    for ($i = $n; $i <= $m; $i++) {
        $sum += $i;
    }
    return $sum;
}

// Example
$n = 5;
$m = 19;
echo "Sum from $n to $m is: " . sumFromNtoMLoop($n, $m);

*/
?>