<?php
function get_save_file_path() {
    return __DIR__ . '/save.json';
}

header('Access-Control-Allow-Origin: *');
if ($_SERVER['REQUEST_URI'] === '/get') {
    require_once('get.php');
} else if ($_SERVER['REQUEST_URI'] === '/put') {
    require_once('put.php');
} else {
    header("HTTP/1.1 404 Not Found");
    echo "not found.";
}
