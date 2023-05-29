<?php
// Методы

class Hi { 
    public static function Hello() { // Публичный метод
        return 'Hello anybody!';
    }
    public static function by() { // Публичный метод
        return 'by!';
    }
}
$object = new Hi;

//echo $object->Hello() . "<br>";
//echo $object->by() . "<br>";
// Мы обратились к обьекту и вызвали метод Hello anybody
//var_dump($object);
//echo Hi::Hello(); // Обращение к методу
//echo Hi::by();




class Family {
    private $boy;
    private $girl;

    public function setNameBoy($boy) {
        $this->boy = $boy;
    }
    public function setNameGirl($girl) {
        $this->girl = $girl;
    }
    public function getNameBoy() {
        return $this->boy;
    }
    public function getNameGirl() {
        return $this->girl;
    }
    public function friend() {
        return $this->getNameGirl() . " и " . $this->getNameBoy() .
        " друзья!";
    }
}

//$family = new Family;
//$family->setNameBoy('Nick');
//$family->setNameGirl('Linda');
//echo $family->friend();





// Ключивое слово self

class Page {
    static $main = 'contents<br>';
    public static function footer() {
        return 'Footer<br>';
    }
    public static function header() {
        return 'Header<br>';
    }
    public static function getPage() {
        echo        self::header() . 
                    self::$main .
                    self::footer(); 
// Обращение к методу
    }
}
Page::getPage();

// $this - относится к текущему обьекту
// self - относится к текущему классу
// Класс - это проект обьекта. Таким образом, мы определяем класс, но мы строим обьект
// -> - стрелка, которая с ключивым словом $this указывает как ссылку на методы и свойства
// показывает на те переменные, которые созданы в классе, так же и функции

/* $this-> не может получить доступ к статическому методу или статическому атребуту, 
мы используем self для доступа к ним.

$this-> при работе с расширенным классом будет ссылаться на текущую область действий,
которую расширил.

self всегда будет ссылаться на родительский класс, потому что ему не нужен экземпляр
для доступа к методу класса или к его непосредственному доступу к классу.
*/

?>