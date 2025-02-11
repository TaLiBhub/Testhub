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

// function binance($arr, $target) {
//     $start = 0;
//     $end = count($arr) -1;
//     $oper = 0;

//     while($start <= $end) {
//         $midle = floor(($start + $end) / 2);
//         $oper++; 
//         if($arr[$midle] === $target) {
//             echo "Количество операций: $oper\n";
//             return $midle;
//         }elseif($arr[$midle] < $target) {
//             $start = $midle + 1;
//         }else {
//             $end = $midle -1;
//         }
//     }
//     echo "Kolvo: $oper\n";
//     return -1;

// }
// $ar = [1, 3, 5, 7, 9, 11, 13, 15, 23, 65, 78 ,99, 100];

// print_r(binance($ar, 78));


// Напишите функцию, которая разворачивает строку без использования встроенных методов для этого.

// function reverseString($str) {
//     $revers = [];
//     $split = str_split($str);
//     for($i = count($split) - 1; $i >= 0; $i--) {
//         $revers[] = $split[$i];
//     }  
    
//     return join("", $revers);
   
// }
// print_r (reverseString("hello")); //olleh



// Напиши функцию которая принимает массив чисел и удаляет все дубикаты.[1, 2, 3, 43, 4, 5, 5]


// $a = [1, 2, 3, 43, 4, 5, 5];
// function arrayUniq($arr) {
//     $uniq = [];

//     for($i = 0; $i < count($arr); $i++) {
//         if(!in_array($arr[$i], $uniq)) {
//             $uniq[] = $arr[$i];
//         }


//     } return $uniq;


// }
// print_r(arrayUniq($a));


// Функция принимает массив чисел и возвращает второе по величине число. [1,2,10,21,95,4,65]
// Сделать проверку если длинна массива меньше 2-х элементов, вернуть -1

// function secondmaxValue($arr) {

//     if(count($arr) < 2 ) {
//         return -1;
//     }
//      usort($arr, function($a, $b){
//         return $b <=> $a;
//     });
//     return $arr[1];
// }

// $a = [1,2,10,21,95,4, 65, 65];

// print_r(secondmaxValue($a));


// 4. Подсчёт частоты слов в строке
// Напишите функцию, которая принимает строку и возвращает количество каждого слова в строке.


// function wordFrequency($str) {
 
//     $words = explode(' ', $str);
//     $wordCount = [];

//     foreach ($words as $word) {
//         if ($word !== '') {
//             if (isset($wordCount[$word])) {
//                 $wordCount[$word]++;
//             } else {
//                 $wordCount[$word] = 1;
//             }
//         }
//     }

//     return $wordCount;
// }


// $string = "hello world hello php world hello";
// print_r(wordFrequency($string));

// function wordFrequency($str) {
//     $words = explode(' ', $str);
//     return array_count_values($words);
// }

// $string = "hello world hello php world hello";
// print_r(wordFrequency($string));



// 5. Факториал числа
// Создайте функцию, которая вычисляет факториал числа (произведение всех чисел от 1 до заданного).

// function factorial($n) {
//     if($n <= 1) {
//         return 1;
//     } 
//     return $n * factorial($n - 1);

// }

// echo factorial(5);

// // [1,1,2,3,5]

// $a = 10;
// $b = 20;
 
// // $a = $b - $a ; 
// // $b = $b - $a ;
// // $a = $a + $a;

// [$a, $b] = [$b, $a];

// echo $a . "\n";
// echo $b . "\n";



// $slovo = "The quick brown fox";
// function longerStr($str) {
//     $words = explode(' ', $str);

//     usort($words, function($a, $b) {
//         return strlen($b) - strlen($a);
//     });
//     return $words [0];
// }

// echo longerStr($slovo);


// $num = [1, 2, 4];

// function rever($rev) {
//     $arrReverse = [];
//     for($i = count($rev) - 1; $i >= 0; $i--) {
//         $arrReverse[] = $rev[$i];
//     }
//     return $arrReverse;
// }


// print_r(rever($num));

// Палиндром: Напиши функцию, которая проверяет, является ли строка палиндромом.
// preg_replace("/[^a-z0-9]/i", "", $str) - regulaka

// function polindrome($str) {
//     $strlower = strtolower($str);
//     return $strlower == strrev($str);
// }
// print_r(polindrome("asa"));
// // var_dump(polindrome("asa,asa"));


// Факториал: Реализуй функцию для вычисления факториала числа.

// function factorial($num) {
//     if($num <= 1 ) {
//         return $num;
//     }
//     return $num * factorial($num - 1);
// } 
// echo factorial(5);


// class Animals {
//     function step($int) {
//         return $int;
//     }
//     function voice() {

//     }
//     function site() {

//     }
// }  



// class Dog extends Animals {
//     function step($int) {
//         return $int;
//     }
//     function voice() {

//     }
//     function site() {

//     }
// } 
// class Bird extends Animals {
//     function step($int) {
//         return $int;
//     }
//     function voice() {

//     }
//     function site() {

//     }
// }
// $user =  new Animals();
// echo $user->step(5);


$arr = [1,2,3,4,5];
foreach($arr as $number) {
    print_r($number);
}