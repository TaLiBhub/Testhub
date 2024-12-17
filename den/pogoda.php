<?php

// echo "Какая сейчас температура: ";

// $temp = readline("Сколько сейчас градусов");

// $temp = intval($temp);
 
// if ($temp < 0) {
//     echo ("Очень холодно.\n");

// } elseif ($temp < 0 || $temp < 15) {

//     echo ("Прохладно.\n");

// } elseif ($temp == 15 || $temp < 25) {

// echo ("Комфортная погода.\n");

// } elseif ($temp == 25 || $temp < 35) {

//     echo ("Тепло.\n");
    
// } else {

//     echo ("Очень жарко.\n");
    
// }


// Зроби іі функіей з одним параметром і яка буде вертати яка температура наприклад
// echo temperatura(20)
// на екрані повино бути "Тепло"

function temperatura($temp){

    if($temp < 0) {
        return "Очень холодно";
    } elseif($temp >= 0 && $temp <= 15) {
        return "Прохладно";
    } elseif($temp >= 15 && $temp <= 25) {
        return "Балдёжная погода";
    } elseif($temp >= 25 && $temp <= 35) {
        return "Погода кайф";
    } else {
        return "Жаровня";
    }
    
}
// echo temperatura(20);









