<?php
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function sumPrimesLessThanP($p) {
    $sum = 0;
    $primes = [];

    for ($i = 2; $i < $p; $i++) {
        if (isPrime($i)) {
            $sum += $i;
            $primes[] = $i;
        }
    }

    if (!empty($primes)) {
        echo implode(" + ", $primes) . " = " . $sum;
    } else {
        echo "No prime numbers less than $p";
    }
}

// 🔹 Example: Sum of all primes less than 30
$p = 300;
sumPrimesLessThanP($p);

?>