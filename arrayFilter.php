<?php
function filterGreaterThan10($arr) {
    return array_filter($arr, function($v) { return $v > 10; });
}
print_r(filterGreaterThan10([5,15,8,20]));
?>