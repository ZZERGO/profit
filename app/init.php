<?php


//Подключаем автозагрузчик классов
require_once ROOT . DS . 'app' . DS . 'core' . DS . 'autoloader.php';
spl_autoload_register(['AutoLoad', 'loader']);

//Запускаем роутер
\App\Core\Router::Run();