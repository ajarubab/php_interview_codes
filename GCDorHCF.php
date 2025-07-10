<?php
// GCD of two numbers
function gcd($a, $b) {
    return $b == 0 ? $a : gcd($b, $a % $b);
}

// GCD of an array
function gcdArray($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result = gcd($result, $arr[$i]);
    }
    return $result;
}

// Example usage
$numbers = [24, 60, 36];
echo "GCD: " . gcdArray($numbers);
?>
