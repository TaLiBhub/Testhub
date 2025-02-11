<?php


// напиши мені код який буде 
// приймати данні від користувача методом пост а саме  "name", "age" і виводити 
// echo 'Привіт, тут name і тут age';

// class Logger {
//     public function log() {
//         if($_SERVER["REQUEST_METHOD"] !== "POST") {
//             echo "pomulka";
//             return;
//         }

//         $data = json_decode(file_get_contents('php://input'), true);
//         $name = $data['name'];
//         $age = $data['age'];
//         echo "Привет, тут $name и тут $age";
//     }
// }
// $l = new Logger();
// $l->log();

// if($_SERVER["REQUEST_METHOD"] === "POST") {
    
//     $name = $_POST['name'];
//     $age = $_POST['age'];
    
//     echo "Привет, меня зовут $name и мне $age лет";
    
// } 



// Создай две страницы:

// 1️ save_user.php — принимает данные пользователя (name и email) методом POST и сохраняет их в 
// файл users.json. Если пользователь с таким именем уже есть, обновляет его email.

// 2️ get_users.php — выводит список всех пользователей в формате JSON при запросе GET.


