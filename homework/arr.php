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

function arrUniqe($arr) {
    $uniq = [];
    for($i = 0; $i < count($arr); $i++) {
        if(!in_array($arr[$i], $uniq, true)) {
            $uniq[] = $arr[$i];
           
            
        }
    } 
        return $uniq;
}
$a = [1, 2, 2, 3, 4, 4, 5];
print_r(arrUniqe($a));


















