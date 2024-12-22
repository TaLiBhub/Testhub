<?php

// 9. Функция с массивом
// Создай функцию findAverage($numbers), 
// которая принимает массив чисел и возвращает их среднее значение. 
// Пример массива: [2, 4, 6, 8, 10].


// function findAverage($numbers) {
// $sum = array_sum($numbers);
// $count = count($numbers);
// $num = $sum / $count;

// return $num;

// }
// $num = [2, 4, 6, 8, 10];
// print_r (findAverage($num));


// FizzBuzz
// Напиши функцию, которая выводит числа от 1 до 20, но:

// Если число делится на 3, выведи Fizz;
// Если число делится на 5, выведи Buzz;
// Если число делится и на 3, и на 5, выведи FizzBuzz;
// В остальных случаях просто число.
// Пример вывода:

// function FizzBuzz($arr) {
//     foreach($arr as $element) {
//         if($element % 3 === 0 && $element % 5 === 0) {
//             echo "FizzBuzz\n";
//         }elseif($element % 3 === 0) {
//             echo "Fizz\n";
//         }elseif($element % 5 === 0 ) {
//             echo "Buzz\n";
//         }else {
//             echo $element . "\n";
//         }
//     }
  

// }
// $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,15,16,17,18,19,20];


// function binary($array, $value) {
//     $start = 0;
//     $end = count($array) - 1;
//     while($start <= $end) {
//         $mid = floor(($start + $end) / 2);
//         if($array[$mid] == $value) {
//             return $mid;
//         }elseif($array[$mid] > $value) {
//             $end = $mid - 1;
//         }else {
//             $start = $mid + 1;
//         }
        
//     }
//     return - 1;


// }
// $result = binary($num, 9);
// if ($result !== -1) {
//     echo "Элемент $value найден на индексе $result\n";
// } else {
//     echo "Элемент $value не найден\n";
// }

// // $num = 19;
// // echo $num / 2;

// function isEven($a) {
//     if($a % 2 === 0) {
//         echo "Chetnoe\n";
//     }else {
//         echo "Nechetnoe";
//     }
// }
$array = [1,2,3,4,5,6,7];

function sumArray($a) {
    return array_sum($a);
}
echo sumArray($array);