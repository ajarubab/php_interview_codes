<?php
function findNthEvenOdd($p, $n, $type = 'even') {
    if ($type == 'even') {
        // If P is even, nth even = P + (n - 1) * 2
        $start = ($p % 2 == 0) ? $p : $p + 1;
    } else {
        // If P is odd, nth odd = P + (n - 1) * 2
        $start = ($p % 2 != 0) ? $p : $p + 1;
    }

    return $start + ($n - 1) * 2;
}
echo "15th even number from 30 is: " . findNthEvenOdd(30, 15, 'even');
?>