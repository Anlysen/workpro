<?php

session_start(); // Если это поставить в начале кода,
// это позволит работать с глобальными переменными
$_SESSION['name'] = 'Andrew';
$_SESSION['arr'] = [1, '2', 'test'];

echo "<h1>Сессия</h1>";

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Чтобы остоновить или прервать сессию
//unset($_SESSION['name']); // Точечное удаление, удаляет 
// session_destroy(); Полное удаление сессии
$_SESSION = []; // Удаляет данные последнего массива (сессии)

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

var_dump(session_destroy()); // Если destroy отработает мы получим 1, если нет получим 0


/* Отличия куки от сессии в то, что куки 
можно почистить, а сессии будут хранится на 
сервере */
// session.save_path 



// Удаление куки
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '' , - 42000,
    $params['path'], $params['domains'],
    $params['secure'], $params['httponly']
);
}
// Удаляет только те куки, которые находятся в сессии


?>