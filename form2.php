<?php

session_start();
$_SESSION['name'] = 'Andrew';
require_once('form.php');

echo $_SERVER['REQUEST_URI'] . "<br>";

// Проверка внутри проверки
//if (!empty($_POST)) { // Проверяем пустой или не пустой суперглобальный массив $_POST
//    if (empty($_POST['name'])) { // Если не пустой, идем дальше по скрипту
//        $errors[] = 'Строка пустая'; // В массив errors складываем ошибки, конкретно в этой строке
//    } // Пишем проверку конкретного поля
//    if (empty($_POST['age'])) { // Проверяем пустой или не пустой суперглобальный массив $_POST
//        $errors[] = 'Поле age пустое';
//    } elseif (!is_numeric($_POST['age'])) { // Если поле не пустое
//        $errors[] = 'Поле age не содержит цифры'; // Если массив содержит цифры, то текст не выведется
//    }
//    if (empty($_POST['pass'])) {
//        $errors[] = 'Необходимо ввести пароль'; 
//    }
//    if (!empty($errors)) { // Если массив errors не пустой
//        foreach ($errors as $err) {
//            echo "<strong>$err</strong><br>";
//        }
//    } else {
//        echo '<pre>';
//        print_r($_POST);
//        echo '</pre>';
//    }
//}


// Оператор ! - означает НЕ
// (!empty()) - не пустой

?>