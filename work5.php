<?php
// Методы

class Hi { // Обычный класс
    public static function Hello() { // Публичный метод
        return 'Hello anybody!';
    }
    public static function by() { // Публичный метод
        return 'by!';
    }
}
$object = new Hi; // Обьект

//echo $object->Hello() . "<br>";
//echo $object->by() . "<br>";
// Мы обратились к обьекту и вызвали метод Hello anybody
//var_dump($object);

//echo Hi::Hello(); // Обращение к методу
//echo Hi::by(); 
// Метод - это функция находящаяся внутри класса




class Family {
    private $boy;
    private $girl;

// Чтобы обратиться к приватным переменным, мы используем ключевое слово This

    public function setNameBoy($boy) {
        $this->boy = $boy; // Этот метот записывает
    }
    public function setNameGirl($girl) {
        $this->girl = $girl; // Этот метот записывает
    }
    public function getNameBoy() {
        return $this->boy; // Этот метот выводит данные
    }
    public function getNameGirl() {
        return $this->girl; // Этот метот выводит данные
    }
    public function friend() { // Этот метод автоматически использует другие 2 метода которые выше
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

/* $this-> не может получить доступ к статическому методу или статическому атрибуту, 
мы используем self для доступа к ним.

$this-> при работе с расширенным классом будет ссылаться на текущую область действий,
которую расширил.

self всегда будет ссылаться на родительский класс, потому что ему не нужен экземпляр
для доступа к методу класса или к его непосредственному доступу к классу.
*/

?>