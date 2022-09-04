<?php
$tokens = array(
    ""
);
if (!in_array(getallheaders()["Token"], $tokens)) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden', true, 403);
    die();
}