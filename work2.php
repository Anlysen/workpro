<?php

setcookie('test', cookie()); // Куки в скрипте должны идти в самом верху страницы
setcookie('test', cookie());

// $_GET - содержит в себе get параметры
// $_POST - содержит в себе post параметры, передаются в теле документа
// $_FILES - работа с загруженными файлами на сервер
// $_COOKIE - обеспечивает работу с кукисами
// $_SESSION - массив для работы с сессиями
// $_REQUEST - хранит инфу при перехде между страницами
// $_SERVER - содержит информацию о скрипте и сервере
// $GLOBALS - все переменные всех глобальных массивов

echo "<h1>Суперглобальные массивы</h1>";
echo "Счетчик посещения сервера/страницы {$_COOKIE['test']}";

function cookie() {
    if (isset($_COOKIE['test'])) {
        $_COOKIE['test']++; // Если в куке есть test, добавляем единицу
    } else {
        $_COOKIE['test'] = 1; // Если такой куки нету, по умолчанию добавляется единица
    }
    return $_COOKIE['test'];
}






?>