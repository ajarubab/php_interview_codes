<?php
function sumEvenOddFromNtoM($n, $m, $type = 'even') {
    $sum = 0;

    for ($i = $n; $i <= $m; $i++) {
        if ($type == 'even' && $i % 2 == 0) {
            $sum += $i;
        } elseif ($type == 'odd' && $i % 2 != 0) {
            $sum += $i;
        }
    }

    return $sum;
}

echo "Sum of even numbers from 1 to 10: " . sumEvenOddFromNtoM(1, 10, 'even');

?>