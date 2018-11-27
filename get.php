<?php
$savePath = get_save_file_path();
$json = file_exists($savePath) ? file_get_contents($savePath) : null;
header('Content-type: application/json');
echo $json ?? json_encode([]);

