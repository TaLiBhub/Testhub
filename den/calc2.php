

<!-- // напиши колькулятор з використаняс форм

// запуск сервера d:/it/php.exe -S localhost:3000

// а потом в браузере http://localhost:3000/



function calculate($num1, $num2, $operation) {
    $result = null;

    if ($operation === '+') {
        $result = $num1 + $num2;
    } elseif ($operation === '-') {
        $result = $num1 - $num2;
    } elseif ($operation === '') {
        $result = $num1 * $num2;
    } elseif ($operation === '/' && $num2 != 0) {
        $result = $num1 / $num2;
    } else {
        $result = 'Ошибка: деление на ноль!';
    }

    return $result;
}

$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculate($num1, $num2, $operation);
}
 --> 

 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = null;

    if ($operation === '+') {
        $result = $num1 + $num2;
    } elseif ($operation === '-') {
        $result = $num1 - $num2;
    } elseif ($operation === '') {
        $result = $num1 * $num2;
    } elseif ($operation === '/' && $num2 != 0) {
        $result = $num1 / $num2;
    } else {
        $result = 'Ошибка: деление на ноль!';
    }

    echo "<h2>Результат: $result</h2>";
}
?>

























