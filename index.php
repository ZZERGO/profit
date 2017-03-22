<?php

if (PHP_VERSION < 7){
    echo '<h2>Для работы программы необходим PHP версии 7 или вышеПрограмма работает только на/h2><br>В данный момент используется версия' . PHP_VERSION;
    die();
}

// включаем отображение всех ошибок
error_reporting (E_ALL);
ini_set('display_errors', 1);

// Задаём константы
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('TPL_DIR', ROOT . DS .'templates');

// Подключаем файл инициализации
$init = ROOT . DS . 'app' . DS . 'init.php';
if (file_exists($init)){
    include_once $init;
} else {
    echo 'Не найден файл инициализации';
    die();
}
echo 'test';

?>



