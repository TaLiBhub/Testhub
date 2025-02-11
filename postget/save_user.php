<?php
// Принимает имя пользователя через POST и сохраняет его в файл users.txt.
// Выводит список всех имен через GET.


$file = "users.txt"; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];

    if ($name) {
        file_put_contents($file, $name . "\n", FILE_APPEND);
        echo "Имя '$name' сохранено!";
    } 
}


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (file_exists($file)) {
        echo file_get_contents($file); 
    } 
}
?>

