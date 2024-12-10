<?php
// Функція для виконання обчислень
function calculate($num1, $num2, $operation) {
    switch($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Помилка: ділення на нуль";
            }
        default:
            return "Невідома операція";
    }
}

// Основна програма
echo "Консольний калькулятор\n";
echo "Введіть перше число: ";
$num1 = trim(fgets(STDIN)); // Читаємо перше число
echo "Введіть операцію (+, -, *, /): ";
$operation = trim(fgets(STDIN)); // Читаємо операцію
echo "Введіть друге число: ";
$num2 = trim(fgets(STDIN)); // Читаємо друге число

// Виконуємо обчислення
$result = calculate($num1, $num2, $operation);
echo "Результат: $result\n";
