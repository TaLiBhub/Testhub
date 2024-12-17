<?php
// Напиши функцию , которая выводит все числа от 1 до 10. Для каждого числа укажи, является ли оно чётным или нечётным.
// Пример вывода:
// text

// 1 - нечетное  
// 2 - четное  
// 3 - нечетное  
// ...  
// 10 - четное

// $n = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// function sortir($numbers) {
//     foreach($numbers as $num) {
//         if($num % 2 === 0) {
//             echo "$num Четное\n";
//         }else {
//             echo "$num Нечетное\n";
//         }
//     }
// }
// sortir($n);
function sortir(){
    for ($number = 1; $number <= 10; $number++) {
        if($number % 2 === 0) {
            echo "$number четное\n";
        }else {
            echo "$number nechetnoe\n";
        }
    } 
}
sortir();














