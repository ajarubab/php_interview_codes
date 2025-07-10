<?php
// GCD helper
function gcd($a, $b) {
    return $b == 0 ? $a : gcd($b, $a % $b);
}

// LCM of two numbers
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

// LCM of an array
function lcmArray($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result = lcm($result, $arr[$i]);
    }
    return $result;
}

// Example usage
$numbers = [4, 6, 8, 20];
echo "LCM: " . lcmArray($numbers);
?>