<?php
$savePath = get_save_file_path();
$json = file_get_contents('php://input');

file_put_contents($savePath, $json);