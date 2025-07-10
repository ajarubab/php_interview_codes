<?php
function randomString($length) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, $length);
}
echo randomString(6);
?>