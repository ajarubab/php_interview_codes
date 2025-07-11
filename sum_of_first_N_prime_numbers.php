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

function sumOfFirstNPrimes($n) {
    $count = 0;
    $num = 2;
    $sum = 0;
    $primes = [];

    while ($count < $n) {
        if (isPrime($num)) {
            $primes[] = $num;
            $sum += $num;
            $count++;
        }
        $num++;
    }

    echo implode(" + ", $primes) . " = " . $sum;
}

$n = 5;
sumOfFirstNPrimes($n);

?>