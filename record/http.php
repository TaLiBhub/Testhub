<?php
header('Content-Type: application/json');

require_once 'record.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);


$manager = new UpdateAndSave('data.json');

$res = $manager->saveData($input['name'], $input['record']);

echo json_encode($res);

