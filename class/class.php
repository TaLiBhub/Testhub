<?php

// Создайте класс Playlist, который будет представлять музыкальный плейлист. Класс должен содержать:

// Создайте класс MusicCollection, который будет управлять музыкальной коллекцией пользователя. 
// Коллекция должна храниться в файле 
// Класс должен содержать:
// ✅ Список альбомов (сохраняется в JSON-файле).
// ✅ Каждый альбом должен содержать:
// Название альбома
// Имя исполнителя
// Год выпуска
// Список песен (массив названий песен)

// Методы класса:
// Добавление альбома — добавляет новый альбом в коллекцию.
// Удаление альбома по названию — удаляет альбом из коллекции.
// Отображение всех альбомов — выводит информацию обо всех альбомах.
// Добавление песни в альбом — добавляет новую песню в указанный альбом.
// Поиск альбома по исполнителю — выводит все альбомы выбранного исполнителя.

// Пример использования:
// php
// Копировать код
// $collection = new MusicCollection('collection.json');
// $collection->addAlbum('Random Access Memories', 'Daft Punk', 2013, ['Give Life Back to Music', 'Instant Crush']);
// $collection->addAlbum('Discovery', 'Daft Punk', 2001, ['One More Time', 'Harder, Better, Faster, Stronger']);

// $collection->addSongToAlbum('Discovery', 'Digital Love');
// $collection->showAllAlbums();

// $collection->findAlbumsByArtist('Daft Punk');
// $collection->deleteAlbum('Random Access Memories');
// $collection->showAllAlbums();


// class Bank {
    //     private $accountNumber;
    //     private $ballance;
    //     private $user;
        
    //     public function __construct($accountNumber, $user, $ballance = 0)
    //     {
    //         $this->accountNumber = $accountNumber;
    //         $this->ballance = $ballance;
    //         $this->user = $user;
    //     }

    //     public function deposite($money) {
    //         $this->ballance += $money;
    //         echo "пополнено на {$money}";
            
    //     }

    //     public function getBallance() {
    //         return "ваш баланс {$this->ballance}";
    //     }

    //     public function getMoney($money) {
    //         $this->ballance -= $money;
    //         echo "с баланса снято {$money}";
    //     }
        
    // }
    
// class Car {
    
//     public $dataFile;
    
//     public function __construct($data = 'data.json')
//     {
//         $this->dataFile = $data;
//     }

//     public function getInfo() {
//        $data = json_decode(file_get_contents($this->dataFile), true);
//        return json_encode($data);
//     }
    
//     public function updatePrice($request) {
//         $req = [
//             'brand' => $request['brand'],
//             'model' => $request['model'],
//             'year' => $request['year'],
//             'price' => $request['price']
//         ];

//         $data = json_decode(file_get_contents($this->dataFile), true); 
//         $data[] = $req; 
//         file_put_contents($this->dataFile, json_encode($data));
//     }

// }

// class Book {
    
//     public $dataFile;

//     public function __construct($data = 'data.json') {

//         $this->dataFile = $data;
//     }

//     public function readFile() {
//         if (!file_exists($this->dataFile)) {
//             return json_encode(["error" => "not found"]);
//         }
//         $read = json_decode(file_get_contents($this->dataFile), true);
//         return json_encode($read);

//     }

//     public function createBook($title, $author, $year, $price) {
//         $info = [
//             "title" => $title,
//             "author" => $author,
//             "year" => $year,
//             "price" => $price
//         ];
//         $read = json_decode(file_get_contents($this->dataFile));
//         $read[] = $info;
//         file_put_contents($this->dataFile, json_encode($read));

//     }

//     public function updatePrice($price, $title) {
//         $status = false;
//         $read = json_decode(file_get_contents($this->dataFile), true); 
//         foreach ($read as &$book) {
//             if ($book["title"] === $title) {
//                 $book["price"] = $price;
//                 $status = true;
//             }
            
//         }

//         file_put_contents($this->dataFile, json_encode($read));
//     }

// }

// class Store {
//     private $products; 
//     private $totalPrice;

//     public function __construct($products = [], $totalPrice = 0) {
//         $this->products = $products;
//         $this->totalPrice = $totalPrice;
//     }

//     public function addProduct($name, $price, $quantity = 1) {
//         if ($price <= 0 || $quantity <= 0) {
//             echo "Ошибка: цена и количество должны быть больше 0";
//             return;
//         }

//         $this->products[] = [
//             'name' => $name,
//             'price' => $price,
//             'quantity' => $quantity
//         ];

//         $this->totalPrice += $price * $quantity;

//         echo "Товар '$name' добавлен в магазин.\n";
//     }

//     public function deleteProduct($name) {
//         foreach ($this->products as $index => $products) {
//             if ($products['name'] === $name) {
//                 unset($this->products[$index]); 
//                 echo "Товар '$name' удалён из магазина.\n";
//                 return;
//             }
//         }
//     }

//     public function getProducts() {
//         return $this->products;
//     }

//     public function getTotalPrice() {
//         return $this->totalPrice;
//     }
// }

// class Library {
//     private array $books = []; 

   
//     public function addBook($title, $desc, $author): void {
//         $arrayBooks = [
//             'title' => $title,
//             'desc' => $desc,
//             'autor' => $author
//         ];

//        $books[] = $arrayBooks;
        
//     }

//     public function removeBook($book): void {
//         $index = array_search($book, $this->books);
//         if ($index !== false) {
//             unset($this->books[$index]); 
//             $this->books = array_values($this->books); 
//             echo "Книга \"$book\" удалена из библиотеки.\n";
//         } else {
//             echo "Книга \"$book\" не найдена в библиотеке.\n";
//         }
//     }

  
//     public function countBooks() {
//         return count($this->books);
//     }

// }

// class ShoppingCart {
//     public $fileName;

//     public function __construct($fileName = 'data.json') {
//         $this->fileName = $fileName;
//     }

//     public function addProduct($price, $name) {
//         $newOrder = [
//             'price' => $price,
//             'name' => $name
//         ];

//         $readFile = json_decode(file_get_contents($this->fileName), true);
            
//         $readFile[] = $newOrder;

//         file_put_contents($this->fileName, json_encode($readFile, JSON_PRETTY_PRINT));

//     }

//     public function deleteProduct($name) {
//         $readFile = json_decode(file_get_contents($this->fileName), true);
//         foreach ($readFile as $key => $item) {
//             if ($item['name'] === $name) {
//                 unset($readFile[$key]);
//                 file_put_contents($this->fileName, json_encode($readFile, JSON_PRETTY_PRINT));
//             }
//         }
//     }
    
//     public function totalPrice() {
//         $readFile = json_decode(file_get_contents($this->fileName), true);
//         $total = 0;
//         foreach ($readFile as $item) {
//             $total += $item['price'];
//         }
//         return $total;
//     }
// }
    
// class Student {
//     private $name;
//     private $grades = [];
//     private $fileName;

  
//     public function __construct($name, $grades = [], $fileName = 'data.json') {
//         $this->name = $name;
//         $this->grades = $grades;
//         $this->fileName = $fileName;
//     }


//     public function addGrade($grade) {
//         if (is_numeric($grade) && $grade >= 0 && $grade <= 100) {
//             $this->grades[] = $grade;
//         echo "Оценка $grade успешно добавлена.<br>";
        
//         } 
//     }


//     public function gradeAverage() {
//         if (count($this->grades) === 0) {
//             return;
//         }
//         $total = array_sum($this->grades);
//         $average = $total / count($this->grades);
//         return round($average, 2); 
//     }



// }

// class Playlist {
//     public $fileName;
    
    

//     public function __construct($fileName = 'data.json') {
        
//         $this->fileName = $fileName;
//     }

//     public function addSound($playlistName, $nameSound, $author) {
//         $sound = [
//             'playlistName' => $playlistName,
//             'nameSound' => $nameSound,
//             'autor' => $author
//         ];
//         $readFile = json_decode(file_get_contents($this->fileName), true);
//         $readFile[] = $sound;
//         file_put_contents($this->fileName, json_encode($readFile, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
//     }

//     public function deleteSound($nameSound) {
//         $readFile = json_decode(file_get_contents($this->fileName), true);
//         foreach($readFile as $key => $item) {
//             if($item['nameSound'] === $nameSound) {
//                 unset($readFile[$key]);
//                 file_put_contents($this->fileName, json_encode($readFile, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
//             }
//         }
//     }

//     public function showAllSounds() {
       
//         $readFile = json_decode(file_get_contents($this->fileName), true);
    
//         if (empty($readFile)) {
//             echo "Плейлист пуст. Добавьте песни.\n";
//             return;
//         }
    
//         echo "Список песен в плейлисте:\n";
//         foreach ($readFile as $key => $item) {
//             echo ($key + 1) . ". Плейлист: {$item['playlistName']} | Песня: {$item['nameSound']} | Автор: {$item['autor']}\n";
//         }
//     }
    
// }

// class MusicCollection {
//     public $fileName;

//     public function __construct($fileName = 'data.json') {
//         $this->fileName = $fileName;
//     }

//     public function addAlbum($albumName, $author, $year, $listSound) {
//         $readFile = json_decode(file_get_contents($this->fileName), true);
//         $readFile[] = [
//                 'albumName' => $albumName,
//                 'author' => $author,
//                 'year' => $year,
//                 'listSound' => $listSound  
//             ];

//         file_put_contents($this->fileName, json_encode($readFile, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
//     }     

//     public function deleteAlbum($albumName) { 
//         $readFile = json_decode(file_get_contents($this->fileName), true);
//             foreach($readFile as $key => $item) {
//                 if($item['albumName'] === $albumName) {
//                     unset($readFile[$key]);
//                     file_put_contents($this->fileName, json_encode($readFile, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
//                 }
//             }
//         }

//         public function showAllalbums() {
//             $readFile = json_decode(file_get_contents($this->fileName), true);
        
//             echo "Альбомы в плейлисте:\n";
//             foreach ($readFile as $key => $item) {
               
//                 $songs = implode(", ", $item['listSound']);
//                 echo ($key + 1) . ". Альбом: {$item['albumName']} | Автор: {$item['author']} | Год: {$item['year']} | Список песен: $songs \n";
//             }
//         }
        
//         public function addSongToAlbum($albumName, $song) {

//             $readFile = json_decode(file_get_contents($this->fileName), true);
        
//             foreach ($readFile as $key => $album) {
                
//                 if ($album['albumName'] === $albumName) {
                    
//                     $readFile[$key]['listSound'][] = $song;
        
//                     file_put_contents($this->fileName, json_encode($readFile, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
//                     echo "Песня '{$song}' успешно добавлена в альбом '{$albumName}'.\n";
//                     return;
//                 }
//             }
//          }

//          public function findAlbumsByAuthor($author) {
//             $readFile = json_decode(file_get_contents($this->fileName), true);
//             $albums = array_filter($readFile, fn($album) => strcasecmp($album['author'], $author) === 0);
        
//             if ($albums) {
//                 foreach ($albums as $album) {
//                     echo "Альбом: {$album['albumName']}" . "\n";
//                 }
//             } 
//         }
//      }



// $album = new MusicCollection();
// // $album->addAlbum('Random Access Memories', 'Daft Punk', 2013, ['Give Life Back to Music', 'Instant Crush']);
// // $album->addAlbum('Discovery', 'Daft Punk', 2001, ['One More Time', 'Harder, Better, Faster, Stronger']);
// // $album->deleteAlbum('Discovery');
// $album->showAllalbums();
// // $album->addSongToAlbum('Discovery', 'Digital Love');-
// // $album->addSongToAlbum('Random Access Memories', 'Contact');
// $album->findAlbumsByAuthor('Daft Punk');



echo "Hello";