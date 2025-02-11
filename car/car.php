<?php

// Класс "Банк"
// Создай класс BankAccount, который будет содержать:

// номер счета
// баланс
// владельца
// Реализуй методы для:

// пополнения счета
// снятия со счета
// получения текущего баланса

class Bank {
    private $accountNumber;
    private $ballance;
    private $user;
    
    public function __construct($accountNumber, $user, $ballance = 0)
    {
        $this->accountNumber = $accountNumber;
        $this->ballance = $ballance;
        $this->user = $user;
    }

    public function deposite($money) {
        $this->ballance += $money;
        echo "пополнено на {$money}";
        
    }

    public function getBallance() {
        return "ваш баланс {$this->ballance}";
    }

    public function getMoney($money) {
        $this->ballance -= $money;
        echo "с баланса снято {$money}";
    }
    
}

$bank = new Bank('1234044233', 'dima', 1000);
$bank->deposite(500);
$bank->getMoney(1000);
echo "\n" . $bank->getBallance();













class Car {
    
    public $dataFile;
    
    public function __construct($data = 'data.json')
    {
        $this->dataFile = $data;
    }

    public function getInfo() {
       $data = json_decode(file_get_contents($this->dataFile), true);
       return json_encode($data);
    }
    
    public function updatePrice($request) {
        $req = [
            'brand' => $request['brand'],
            'model' => $request['model'],
            'year' => $request['year'],
            'price' => $request['price']
        ];

        $data = json_decode(file_get_contents($this->dataFile), true); 
        $data[] = $req; 
        file_put_contents($this->dataFile, json_encode($data));
    }

}



