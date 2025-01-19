<?php

// Пример: простой GET-запрос

$url = "https://jsonplaceholder.typicode.com/posts/1"; // URL API

// Инициализация cURL
$curl = curl_init();

// Настройки cURL
curl_setopt($curl, CURLOPT_URL, $url);         // Указываем URL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Возврат данных вместо вывода

// Выполнение запроса
$response = curl_exec($curl);

// Проверка ошибок
if ($response === false) {
    echo "Ошибка cURL: " . curl_error($curl);
} else {
    echo "Ответ сервера: " . $response;
}

// Закрытие cURL
curl_close($curl);
?>




<!-- Пример POST-запроса в PHP -->

<?php
// URL для запроса
$url = "https://jsonplaceholder.typicode.com/posts";

// Данные для отправки
$data = [
    "title" => "New Post",
    "body" => "This is a new post",
    "userId" => 1
];

// Инициализация cURL
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);                   // Устанавливаем POST-запрос
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data)); // Данные для отправки
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);          // Возврат результата
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",                     // Указываем тип контента
]);

// Выполнение запроса
$response = curl_exec($curl);

// Закрытие cURL
curl_close($curl);

echo $response;
?>



Сравнение GET и POST

Критерий                    GET                                 POST
1. Использование            Получение данных                    Отправка данных
2. Где передаются данные    В URL (строка запроса)              В теле запроса
3. Длина данных             Ограничена длиной URL               Нет ограничений
4. Безопасность             Менее безопасен (виден в URL)       Более безопасен (скрыт от глаз)
5. Кэширование              Кэшируется браузером                Не кэшируется
6. Пример                   Поиск или фильтр                    Авторизация или создание записи


<!-- Пример использования GET и POST   -->


<!-- GET-запрос (форма поиска)  -->

<form action="search.php" method="get">
    <input type="text" name="q" placeholder="Введите запрос">
    <button type="submit">Поиск</button>
</form>

<!-- POST-запрос (форма регистрации): -->

<form action="register.php" method="post">
    <input type="text" name="username" placeholder="Введите имя">
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Зарегистрироваться</button>
</form>


