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

function findNthPrimeAfterP($p, $n) {
    $count = 0;
    $num = $p + 1;

    while (true) {
        if (isPrime($num)) {
            $count++;
            if ($count == $n) {
                return $num;
            }
        }
        $num++;
    }
}
$p = 3;
$n = 2;
echo "The {$n}th prime number after {$p} is: " . findNthPrimeAfterP($p, $n);

?>