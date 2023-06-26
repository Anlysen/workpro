<?php

// ООП - наследование
// Класс Люди (родительский класс)
// Класс девушки (дочерний - класс, который наследует)
// Класс мальчики






// Базовый класс
class Base {
    protected $secret; // Свойство
    public $one; // Свойство
    public function __construct($secret) // Метод
    {
        $this->secret = $secret;
    }

    private $text; // Не доступна при наследовании
    public function printer() { // Метод
        echo $this->one;
    }
    private function exe() { // Метод
    // Не доступна при наследовании
        echo 'lets go!';
    }
}





// Класс, который наследовал базовый
class NewClass extends Base { 
    public $two; // Свойство
    public function __construct($secret) // Метод
    {
        $this->secret = $secret;
    }
    public function by() { // Метод
        echo $this->two;
        unset($secret);
    }
}

/*
Из производного класса доступны все переменные и методы
обьявлены только со спецификатором доступа public.
*/

$obj = new NewClass(11);
echo "<pre>";
print_r($obj);
echo "</pre>";

//$obj = new NewClass; // Обращаемся к базовому классу черес наследованый
//$obj->one = 'Lysenko';
//$obj->two = 'Andrew';

//$obj->text = 'Text'; // Выдаст ошибку
//$obj->exe(); // Выдаст ошибку

$obj->printer();
echo "<br>";
$obj->by();



function foo() {
    static $bar;
    $bar++;
    echo 'Before unset: ' . $bar . "<br>";
    unset($bar);
    $bar = 23;
    echo 'After unset: ' . $bar . "<br>";
}
foo();
foo();
foo();

/*
Result
Before unset: 1
After unset: 23
Before unset: 2
After unset: 23
Before unset: 3
After unset: 23
*/





echo date('h:i:s') . "<br>";
sleep(10);
echo date('h:i:s') . "<br>";





class _SW {
    public $text;
    public $mytext;
    public function __construct()
    {
        $this->text = 'This is "__text"';
        $this->mytext = 'This is "__text"';
    }
    public function __sleep()
    {
        $this->text = 'This is "__text"';
        $this->mytext = 'This is "__text"';
        return array('__text', '__mytext');
    }
}
$sw = new _SW();
echo "<pre>";
print_r($sw);
serialize($sw);
print_r($sw);
echo "</pre>";




?>