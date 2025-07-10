<?php
function uniqueArray($arr) {
    return array_unique($arr);
}
print_r(uniqueArray([1,2,2,3,3]));
?>