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

// // Основна програма
// echo "Консольний калькулятор\n";
// echo "Введіть перше число: ";
// $num1 = trim(readline()); // Читаємо перше число
// echo "Введіть операцію (+, -, *, /): ";
// $operation = trim(readline()); // Читаємо операцію
// echo "Введіть друге число: ";
// $num2 = trim(readline()); // Читаємо друге число

// // Виконуємо обчислення
// $result = calculate($num1, $num2, $operation);
// echo "Результат: $result\n";

// давай пока перепиши калькулятор який є використовуя функію назви іі наприклад calc
// ($number1, $operator, $number2)

// '+','-','/','*'

// class ManyFunk {
//     function calc($number1, $operator, $number2){
//         if($operator == '+') {
//             return $number1 + $number2;
//         }elseif($operator == '-') {
//             return $number1 - $number2;
//         }elseif($operator == '/') {
//             if($number2 !== 0 ) {
//                 return $number1 / $number2;
//             }else {
//                 return "Не можем";
//             }
//         }elseif($operator == '*') {
//             return $number1 * $number2;
//         }
//     }
//     function calc2() {
//         return "shamal";
        
//     }
// } 
// $manyfunk = new ManyFunk;
// echo $manyfunk->calc2();
