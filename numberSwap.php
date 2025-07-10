<?php

// Method 1 : Number swap without using 3rd variable

/*
$a = 5;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a = $a, b = $b";
*/


// Method 2 : Number swap without using 3rd variable


$a = 5;
$b = 10;

$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo "a = $a, b = $b";