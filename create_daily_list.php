<?php
$saveDataFile =  __DIR__ . '/save.json';

$data = json_decode(file_get_contents($saveDataFile), true);
$listId = uniqid();
$data['todoLists'][$listId] = [
    'list_id' => $listId,
    'date' => (new DateTime())->modify('+1 day')->format('Y-m-d'),
    'type' => 2,
    'list' => []
];
return file_put_contents($saveDataFile, json_encode($data, JSON_UNESCAPED_UNICODE));
