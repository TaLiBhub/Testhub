<?php

header("Content-Type: application/json");
require_once "api.php";

$api = new ApiHandler();

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'] ?? null;
    $age = $data['age'] ?? null;

    if (!$name || !$age) {
        echo json_encode(["error" => "Введите имя и возраст"]);
        exit;
    }

    echo json_encode($api->upDate($name, $age));
} elseif ($method === "GET") {
    $api->getData();
} elseif ($method === "DELETE") {
    echo json_encode($api->deleteFile());
} else {
    echo json_encode(["error" => "Метод не поддерживается"]);
}
