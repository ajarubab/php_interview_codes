<?php
function sumFirstNEvenOddFromP($p, $n, $type = 'even') {
    $sum = 0;
    $count = 0;
    $current = $p;

    while ($count < $n) {
        if ($type === 'even' && $current % 2 === 0) {
            $sum += $current;
            $count++;
        } elseif ($type === 'odd' && $current % 2 !== 0) {
            $sum += $current;
            $count++;
        }
        $current++;
    }

    return $sum;
}

// 🔹 Examples:
echo "Sum of first 10 even numbers from 20: " . sumFirstNEvenOddFromP(20, 10, 'even');
echo "<br><br>";
echo "Sum of first 10 odd numbers from 7: " . sumFirstNEvenOddFromP(7, 10, 'odd');


?>