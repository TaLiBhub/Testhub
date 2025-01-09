<?php


// Создайте функцию finalGrade, которая вычисляет итоговую оценку студента в зависимости от двух параметров: оценки за экзамен и количества выполненных проектов.

// Эта функция должна принимать два аргумента: exam - оценка за экзамен (от 0 до 100); projects - количество выполненных проектов (от 0 и выше);

// Эта функция должна возвращать число (итоговая оценка). Существует четыре типа итоговых оценок:

// 100, если оценка за экзамен больше 90 или если количество выполненных проектов больше 10.
// 90, если оценка за экзамен выше 75 и количество выполненных проектов не менее 5.
// 75, если оценка за экзамен больше 50 и количество выполненных проектов не менее 2.
// 0, в других случаях


// function finalGrade($exam, $projects) {
//     if($exam > 90 || $projects > 10) {
//         return "100";
//     }elseif($exam > 75 && $projects >= 5) {
//         return "90";
//     }elseif($exam > 50 && $projects >= 2) {
//         return "75";
//     }else {
//         return "0";
//     }
   


// }
// echo finalGrade(22, 0); 


// $a = [1, 2];
// $b = [3, 4];
// $res = array_merge($a, $b);
// // print_r($res);
// echo(implode(',', $res));

 
// Задача 2. Подсчет количества уникальных элементов
// Дан массив. Напиши функцию, которая возвращает количество уникальных элементов в массиве.



// function countUniqueElements($arr) {
//     return count(array_unique($arr));
   
// }

// echo countUniqueElements([1, 2, 2, 3, 4, 4, 5]); // 5


// Задача 3. Создание нового массива с квадратами элементов
// Дан массив чисел. Верни новый массив, где каждый элемент — квадрат числа из исходного массива.
 


// function squareElements($numbers) {
//     $arr = [];
//     for ($i = 0; $i < count($numbers); $i++) {
//         $arr[] = $numbers[$i] * $numbers[$i];
        
//     }
//     return $arr;

// }

// print_r(squareElements([1, 2, 3, 4])); // [1, 4, 9, 16]


// Задача 5. Проверка наличия элемента
// Напиши функцию, которая принимает массив строк и строку, и возвращает true, если строка 
// содержится в массиве.


// function containsString($arr, $str) {
//     return in_array($str, $arr);
   
// }
// $arr = ['apple', 'banana', 'cherry'];
// $str = 'banana';
// var_dump(containsString($arr, $str)); // true
// // var_dump(containsString(['apple', 'banana', 'cherry'], 'grape'));  // false

// Задача 6. Сортировка массива строк по длине
// Напиши функцию, которая сортирует массив строк в порядке возрастания их длины.


// function sortByLength($arr) {
//     usort($arr, function($a, $b) {
//         return strlen($b) - strlen($a);
//     });
//     return $arr;
// }



// print_r(sortByLength(['a', 'abc', 'ab'])); // ['a', 'ab', 'abc']

// Задача 7. Разделение массива на два по условию
// Напиши функцию, которая принимает массив чисел и делит его на два массива: 
// один содержит числа больше или равные 10, другой — числа меньше 10.


// function splitArrayByCondition($numbers) {
//     $greaterOrEqual = array_filter($numbers, fn($num) => $num >= 10);
//     $less =  array_filter($numbers, fn($num) => $num < 10);
//     return ['greaterOrEqual' => $greaterOrEqual, 'less' => $less];
// }

// print_r(splitArrayByCondition([5, 10, 15, 3, 12])); 
// // ['greaterOrEqual' => [10, 15, 12], 'less' => [5, 3]]


function findMine($arr) {
    return max($arr);

}
echo findMine([3,6,7,2,1,6]);