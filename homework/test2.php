<?php

// Счётчик слов в текстовом файле
// Написать функцию, которая считывает текстовый файл и выводит количество слов в нём


// function slovo($str) {
//     $res = explode(',', $str);
//     return count($res);

// }

// $text = "banka, snus, vkidka, nasvai, kolpack";

// print_r(slovo($text));


function fileName($file) {
    $count = 0;
    $data = fopen($file, "r");
    while(($line = fgets($data)) !== false) {
        $count += str_word_count($line);
    }
    fclose($data);
    return $count;

}


$text = "homework/test.txt";

echo fileName($text);





