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

//Подключаем автозагрузчик классов
require_once ROOT . DS . 'app' . DS . 'core' . DS . 'autoloader.php';
spl_autoload_register(['AutoLoad', 'loader']);

//Запускаем роутер
\App\Core\Router::Run();

?>