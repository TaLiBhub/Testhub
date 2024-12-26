<?php

//aca
//Разделить на элементы 
//["a","c","a"]
//["d","r","o"]
//Перевернуть массив строк
//2 переменных (1 ориг-массив строк) (2 перевернутый-массив строк)
//Строгое равенство между переменными (возвращает true false)


function polindrom($str) {
    $lower = strtolower($str);
    echo $lower; 
    $reverse = strrev($lower);
    // return $reverse;



}

echo polindrom("Dota is my LIFE");

