<?php
/*
function isPrime($n) {
    if ($n <= 1) return false;
    for ($i=2; $i<=sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
echo isPrime(70) ? "Prime" : "Not Prime";
*/


// Method 2 
function isPrime($num) {
    if ($num <= 1) return false; // 0 and 1 are not prime
    if ($num == 2) return true;  // 2 is the only even prime number
    if ($num % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$number = 299;
echo isPrime($number) ? "$number is a Prime number" : "$number is Not a Prime number";

?>