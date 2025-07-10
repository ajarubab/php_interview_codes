<?php

/*
// Method : With the use of strrev()

function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^a-z0-9]/i", "", $str));
    return $str == strrev($str);
}
echo isPalindrome("madam") ? "Yes, it is a pallindrome" : "No, it is not a pallindrome.";
*/

/*

// Method 2 : Without using strrev()
function isPalindromeManual($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    $len = strlen($str);
    for ($i = 0; $i < $len / 2; $i++) {
        if ($str[$i] !== $str[$len - $i - 1]) {
            return false;
        }
    }
    return true;
}

$input = "RaceCar";
echo isPalindromeManual($input) ? "is a Palindrome" : "Not a Palindrome";
*/
?>