<?php


class UpdateAndSave {
    private $dataFile;

    public function __construct($dataFile = 'data.json') {
        $this->dataFile = $dataFile;
    }

    public function saveData($name, $record) {
    
        $jsonData = file_get_contents($this->dataFile);
        $data = json_decode($jsonData, true);

        foreach ($data['records'] as $user) {
            if ($user['name'] === $name) {
                $user['record'] = max($user['record'], $record);

            }
        }
        
        $data['records'][] = ["name" => $name, "record" => $record];

        
        file_put_contents($this->dataFile, json_encode($data));

        return ["data" => $data];
    }
}
















