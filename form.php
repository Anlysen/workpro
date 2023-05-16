<?php

if (empty($_POST['name']) or empty($_POST['age'])) { 
// В этой строчке показывает, если эти значения пустые, выводит exit
    exit ('Одно либо два поля заполнены');
} else {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    // Если в одном из них есть значение, выводит true
}

echo $name . " " . $age;

/* Если 10 и более полей (анкета), проверяем в empty весь  пост ($_POST),
без большой проверки */



?>