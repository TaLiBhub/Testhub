<?php

// Найти все уникальные числа в массиве.
// Напиши функцию, которая принимает массив чисел и возвращает массив уникальных чисел 
// (то есть без повторений).
// [1, 2, 2, 3, 4, 4, 5]



// function uniqe($arry) {
//     $uniq1 = array_unique($arry);
//     return  $uniq1;
// }

// $a = [1, 2, 2, 3, 4, 4, 5];
// print_r(uniqe($a));

// function arrUniqe($arr) {
//     $uniq = [];
//     for($i = 0; $i < count($arr); $i++) {
//         if(!in_array($arr[$i], $uniq, true)) {
//             $uniq[] = $arr[$i];
           
            
//         }
//     } 
//         return $uniq;
// }
// $a = [1, 2, 2, 3, 4, 4, 5];
// print_r(arrUniqe($a));

// Напиши функцию, которая принимает массив и возвращает новый массив
// элементы которого идут в обратном порядке.



// function sorted($ar) {
//     $n = count($ar);
//    for($i = 0; $i < $n; $i++) {
//     for($g = 0; $g < $n - $i - 1; $g++) {
//         if($ar[$g] > $ar[$g + 1]) {
//             [$ar[$g], $ar[$g + 1]] = [$ar[$g + 1], $ar[$g]];
//         }
//     }
// }
// return $ar;
// }
// $v = [5, 3, 1, 4, 2];
// print_r(sorted($v));

// 1. Сложение чисел
// Напишите функцию, которая принимает два числа и возвращает их сумму. 
// Если оба числа отсутствуют, функция должна возвращать 0.

// function sum($a = 0, $b = 0) {
//     return $a + $b;
// }

// echo sum();
 


// 2. Переворот строки
// Напишите функцию, которая принимает строку и возвращает её в обратном порядке.

// function reverseString($str) {
//     $a = strrev($str);
//     return $a;
// }

// echo reverseString("hello");

// function reverseString($str) {
//    $reversed = "";
//     for($i = strlen($str) - 1; $i >= 0; $i--) {
//         $reversed .= $str[$i];
//     }
//     return $reversed;
// }

// echo reverseString("hello");



// Найти максимальное число в массиве
// Напишите функцию, которая принимает массив чисел и возвращает максимальное значение.
// Если массив пустой, функция должна вернуть null.


// Найти максимальное число в массиве
// Напишите функцию, которая принимает массив чисел и возвращает максимальное значение.
// Если массив пустой, функция должна вернуть null.

// function findMax($numbers) {
    
//     if (empty($numbers)) {
//         return "null";
//     }
//      return max($numbers);
// }

// $a = [1, 5, 3, 9, 2];
// $b = []; 

// echo findMax([1, 5, 3, 9, 2]);


// 4. Чётные числа из массива
// Напишите функцию, которая принимает массив чисел и возвращает массив только с чётными числами.

// function filterEvenNumbers($numbers) {
//      return array_filter($numbers, function($num) {
//      return $num % 2 === 0;
//      });
// }
// $a = [1, 2, 3, 4, 5, 6];

// print_r(filterEvenNumbers($a));


// function getEvenNumbers($numbers) {
//     $evenNumbers = []; 
//     for ($i = 0; $i < count($numbers); $i++) {
//         if ($numbers[$i] % 2 === 0) { 
//             $evenNumbers[] = $numbers[$i]; 
//          }
//     }
//     return $evenNumbers; 
// }


// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $evenNumbers = getEvenNumbers($array);

// print_r($evenNumbers);


// 1 . линейный поиск , нужно  найти число в массиве чисел без использования методов массива


// function lianeArr($array, $num) {
//     $oper = 0; 
//     for($i = 0; $i < count($array); $i++) {
//         $oper++;
//         if($array[$i] === $num) {
//             echo "Количество операций: $oper\n";
//             return $i;
//         }
//     }
//     return -1;
// }

// $ar = [1, 3, 5, 7, 9, 11, 13, 15, 23, 65, 78 ,99, 100];
// print_r(lianeArr($ar, 78));


// бинарный поиск , найти елемент в массиве , делением массива пополам

function binance($arr, $target) {
    $start = 0;
    $end = count($arr) -1;
    $oper = 0;

    while($start <= $end) {
        $midle = floor(($start + $end) / 2);
        $oper++; 
        if($arr[$midle] === $target) {
            echo "Количество операций: $oper\n";
            return $midle;
        }elseif($arr[$midle] < $target) {
            $start = $midle + 1;
        }else {
            $end = $midle -1;
        }
    }
    echo "Kolvo: $oper\n";
    return -1;

}
$ar = [1, 3, 5, 7, 9, 11, 13, 15, 23, 65, 78 ,99, 100];

print_r(binance($ar, 78));