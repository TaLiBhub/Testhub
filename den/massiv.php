<?php


// function mergeArra($num1, $num2) {

//     return array_merge($num1, $num2);


// }


// function sortA($num1) {
//     sort($num1);
//     print_r($num1);
    
// }

// sortA([1,2,7,3,8]);

function multybyTwo($num1) {
    $res = [];
    for ($i = 0; $i < count($num1); $i++) {
        $res[] = $num1[$i] * 2;
            
    }
    return $res;
}


print_r(multybyTwo([1,5,3,6,3]));