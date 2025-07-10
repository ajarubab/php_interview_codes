<?php
function squareArray($arr) {
    return array_map(function($v) { return $v*$v; }, $arr);
}
print_r(squareArray([2,3,4]));
?>