<?php

//echo $_FILES['filename']['size'] . "<br>"; // Выводит размер файла в байтах
//echo $_FILES['filename']['name'] . "<br>"; // Выводит название файла
//echo $_FILES['filename']['tmp_name'] . "<br>"; // Получаем весь файла

// 1kb = 1024bite and 1mb = 1024kb
// Если нужно ограничить в 2mb нужно сделать ...
// 2 * 1024 * 1024 = 2097 - колличество байтов, которые будут для нас как ограничение

if (move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/' . 
$_FILES['filename']['name'])) { // Перемещает загруженный файл в новое место
    if ($_FILES['filename']['size'] > 2 * 1024 * 1024) { 
// Проверка на ограничение файла не более 2-х мегабайт
        exit ('Размер файла превышает 2 мегабайта');
    } else {
    echo 'Файл скопирован на сервер <br>'; // Возвращает это, если true
    echo 'Характеристики нашего файла:' . "<br>";
    echo 'Имя файла:' . "<br>";
    echo $_FILES['filename']['name'] . "<br>";
    echo 'Размер файла:' . "<br>";
    echo $_FILES['filename']['size'] . "<br>";
    echo 'Тип файла:' . "<br>";
    echo $_FILES['filename']['type'] . "<br>";
    //echo 'Файл не скопирован на сервер'; // Возвращает это, если false 
    }
}


?>