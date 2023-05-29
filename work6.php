<?php

// __construct() - Конструкторы

class Constr {
    private $y; // Это свойство
    private $x;

    public function __construct($x) { // Это не функция, а метод
        echo 'Отработал конструктор (метод)<br>';
        $this->y = 22;
        $this->x = $x;
    }

// Деструктор - уничтожение обьекта
    public function __destruct() // Очищает памят компьютера
    {
        echo 'Отработал деструктор (метод)<br>';
    }

    public function getY() {
        return $this->y;
    }
    public function getX() {
        return $this->x;
    }
}
$obj = new Constr(10);
// В этом месте мы прописываем число, которое мы пробрасываем как параметр

//echo $obj->getY() . "<br>"; // Автоматически $y присваивает цифру 22
//echo $obj->getX();


?>