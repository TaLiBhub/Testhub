<?php


$fileName = 'text.txt'; 
$nadpis = 'Hello, world!'; 

file_put_contents($fileName, $nadpis);


$fileContent = file_get_contents($fileName);
echo  $fileContent;


// file_put_contents('text.txt', 'Hello, world!');

// $content = file_get_contents('example.txt');

// echo $content;