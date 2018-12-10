<?php
$saveDataFile = './save.json';

$data = json_decode(file_get_contents($saveDataFile), true);
$listId = uniqid();
$data['todoLists'][$listId] = [
    'listId' => $listId,
    'date' => (new DateTime())->format('Y-m-d'),
    'type' => 2,
    'list' => []
];
return file_put_contents($saveDataFile, json_encode($data));
