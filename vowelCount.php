<?php
function countVowels($str) {
    return preg_match_all('/[aeiou]/i', $str);
}
echo countVowels("Hello World"); // 3

?>