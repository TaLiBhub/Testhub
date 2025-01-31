<?php

// $data = "name,age
// Den,33
// Habib,23
// Oleg,27";

// file_put_contents('test3.txt', $data);


// $content = file_get_contents('den/test3.txt');
// $data = array_map("str_getcsv", $content);


// $csvLines = file("den/test3.txt"); 
// $data = array_map("str_getcsv", $csvLines);

// function changeAge($data2) {

//     for($i = 0; $i < count($data2); $i++) {
//        if($data2[$i][0] == 'Habib') {
//         $data2[$i][1] = 30;
//        }
//     }
//     return $data2;

// }


// $data = changeAge($data);

// print_r($data);


// $file = fopen("den/test3.txt" , 'w');

// foreach ($data as $row) {
//     fputcsv($file, $row);
// }

// fclose($file);



// Вывести общую сумму возраста людей, читать с файла
// Средний возраст
// Функция добавления новой записи "имя, возраст" 
// Удаление по имени 
// Создаем пустую строку для хранения CSV данных
// $output = '';

// Проходим по массиву и преобразуем его в строку CSV
// foreach ($data as $row) {
//     $output .= implode(',', $row) . "\n"; 
// Соединяем элементы строки через запятую и добавляем новую строку


// Сделать красиво функциями, универсально.

class FileManager {
    private $filename;


    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function readFile() {
        $read = file($this->filename);
        return $read;
    } 

    public function getSumAge() {
        $users = $this->readFile();
        return array_reduce($users, function($sum, $user){
            $data = str_getcsv($user); 
            if (isset($data[1])) {
                $sum += (int)$data[1]; 
            }
            return $sum;
        },0);
       
    }

    public function middleAge() {
        $users = $this->readFile();
        array_shift($users);

        $ages = array_map(function($user) {
            $data = str_getcsv($user);
            $age = 0;
            if (isset($data[1])) {
                $age = (int)$data[1]; 
            }
            return $age;
        }, $users);
        if (count($ages) > 0) {
            return array_sum($ages) / count($ages);
        }
        return 0;
    }

    public function addNote($name, $age) {
        $newLine = "$name,$age\n";
        file_put_contents($this->filename, $newLine, FILE_APPEND);
    }

    public function deleteByName($name) {
        $users = $this->readFile();
        $filtered = array_filter($users, function ($user) use ($name) {
         
            if (!is_string($user)) {
                return true; 
            }
            $data = str_getcsv($user, ',', '"', '\\');
    
            if (isset($data[0])) {
                return trim($data[0]) !== $name;
            }
            return false;
        });
    
        file_put_contents($this->filename, implode("", $filtered));
    }
    
    

}
$filemanager = new FileManager("den/test3.txt");
// print_r($filemanager->readFile());
// print_r($filemanager->getsumAge());
// print_r($filemanager->middleAge());
//  $filemanager->addNote("habib", "40");

print $filemanager->deleteByName("Den");