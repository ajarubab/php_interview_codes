<?php
/*

// Method 1 : With the use of strrev()
function reverseString($str) {
    return strrev($str);
}
echo reverseString("hello");
*/

/*
// Method 2 : Without use of strrev()

function reverseString($str) {
    $reversed = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

$input = "Manoranjan";
echo reverseString($input);
*/

// Method 3 : Without use of strrev()
function reverseMultibyte($str) {
    $reversed = '';
    $len = mb_strlen($str);
    for ($i = $len - 1; $i >= 0; $i--) {
        $reversed .= mb_substr($str, $i, 1);
    }
    return $reversed;
}

// Example
$input = "Sundarban";
echo reverseMultibyte($input);

?>