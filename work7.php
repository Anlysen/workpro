<?php

// Методы аксессоры __set(), __get()
// __set() - записывает информацию
// __get() - получает информацию, параметр ключ
// по которому мы хотим получить 

class Accessor {
    private $one = [];

    public function __get($key) { // Пишем метод
        if (array_key_exists($key, $this->one)) { 
// Если пробросить ключ и он находится в массиве $one
return $this->one[$key];
        } else {
            return null;
        }
    }
    public function __set($key, $value) {
        $this->one[$key] = $value; // В этом массиве будет находится $value
    }
}
// Экземпляр класса
$obj = new Accessor();
$obj->text = 'Test text<br>'; // Ключ массива text
$obj->name = 'Boo!!!<br>'; // Ключ массива name

//echo $obj->text;

echo "<pre>";
print_r($obj);
echo "</pre>";




class Point {
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

$p1 = new Point(4, 5);
$p2 = new Point(4);
$p3 = new Point(y: 5, x: 4);


?>