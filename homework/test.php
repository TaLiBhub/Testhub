<?php



function createTextFile($filename, $text, $repeatCount) {
    try { 
        $file = fopen($filename, "w");
        for ($i = 0; $i < $repeatCount; $i++) {
            fwrite($file, $text);
        }
        fclose($file);
        echo 'Vse good: $fileName';

    } catch (Exception $e) { 
        echo "Error" . $e->getMessage();
    }

}
$fileName = "homework/test.txt";
$text = "Hello Den \n";
$repeat = 100; 

createTextFile($fileName, $text, $repeat);














