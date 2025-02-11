<?php

// 1 метод - чтение с файла 
// 2 метод - запись в файл 
// 3 метод - получение данных с файла 
// 4 метод - обновление данных в файле 
// 5 метод - удаление данных в файле 

// 6 изюминка - частичное обновление данных (patch)



class ApiHandler {
    private $file;

    public function __construct($fileName = 'data.json') {
        $this->file = $fileName;
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode(["users" => []])); 
        }
    }

    
    public function readFile() {
        $json = file_get_contents($this->file);
        return json_decode($json, true); 
    }

    
    public function writeFile($data) {
        file_put_contents($this->file, json_encode($data, JSON_UNESCAPED_UNICODE));
    }

    
    public function getData() {
        $name = $_GET['name'] ?? null; 
        $data = $this->readFile();

        if (!$name) {
            echo json_encode(["error" => "Введите имя пользователя"]);
            return;
        }

        
        $user = array_filter($data['users'], fn($userName) => $userName['name'] === $name);

        if (empty($user)) {
            http_response_code(404);
            echo json_encode(['error' => 'Пользователь не найден.']);
            return;
        }

        echo json_encode(['users' => array_values($user)]);
    }

   
    public function upDate($name, $age) {
        $data = $this->readFile();
        $updated = false; 

       
        if (!isset($data['users'])) {
            $data['users'] = [];
        }

        foreach ($data['users'] as &$user) {
            if ($user['name'] === $name) {
                $user['age'] = (int)$age;
                $updated = true;
                
            }
        }

        if (!$updated) {
            $data['users'][] = ["name" => $name, "age" => (int)$age];
        }

        $this->writeFile($data);

        return ["success" => true, "data" => $data, "updated" => $updated];
    }

    public function deleteFile() {
        if (file_exists($this->file)) {
            unlink($this->file);
            return ["success" => true, "message" => "Файл удалён."];
        } else {
            return ["success" => false, "message" => "Файл не найден."];
        }
    }
}

// $apiHandler = new ApiHandler(); 
// $apiHandler->