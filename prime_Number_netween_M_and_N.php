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

function printPrimesInRange($n, $m) {
    for ($i = $n; $i <= $m; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

printPrimesInRange(100, 500);

?>