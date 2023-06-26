<?php

// Перезагрузка метода

/* Это когда мы наследуемся от родительского
класса и пишем в дочернем классе такой же метод,
который был у родителя.
*/

class Base { // Родительский класс
    public function stars() {
        echo 'I am a method of parent class' . "<br>";
    }
}


class Second extends Base { // Дочерний класс
    public function stars() {
        parent::stars(); 
// Вызывает в начале родительский метот, затем дочерний
        echo 'I am a method of child class' . "<br>";
    }
}
//$obj = new Second();
//$obj->stars();




class Toys {
    private $data;

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    public function __get($name) {
        echo "Перегруженое свойство name = " . $this->data[$name]
        . "<br>";
    }
    public function __unset($name) {
        unset($this->data[$name]);
        echo $name . " очищен";
    }
}
$objectToys = new Toys;
$objectToys->overload_property = "new";
echo $objectToys->overload_property . "<br>";
isset($objectToys->overload_property);
unset($objectToys->overload_property);
isset($objectToys->overload_property);


?>