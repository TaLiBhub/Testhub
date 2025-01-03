<?php
// 1. Простая проверка переменной
// Напишите программу, которая проверяет, задана ли переменная $name. 
// Если переменная пуста, выведите сообщение: Имя не задано. 
// Если переменная содержит значение, выведите: Привет, {имя}!.


// $name = "";
// if(isset($name) && !empty($name)) {
//     echo "Hi snus";


// }else {
//     echo "Name ne zadano"
//     ;
// }


// $arraySort = array_map($num, $)

// $a = function ($sum) {
//     return $sum * 2;
// };

// // echo num(2);
// print_r(array_map($a, range(1,5)));

function prototypeMap($array) {
    $arr = [];
    for($i = 1; $i < end($array); $i++) {
        // $a = $i * 2;
    return array_push($arr, $i * 2);
        // return array_push($arr, $i);
    }
    return $arr;
}
print_r(prototypeMap([1,2,3,4,5]));

// $a = [1,2,3,4,5];
// print_r(count($a));

// Создайте массив из 5 чисел. Найдите и выведите:

// минимальное число;
// максимальное число.


















