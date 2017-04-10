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
define('ROOT', dirname(__FILE__)  . DS . '..');
define('APP', ROOT . DS . 'app');
define('TPL_DIR', ROOT . DS .'templates');

//echo '<h3>GET-параметры:</h3>';
//var_dump($_GET);

// Подключаем автозагрузку и регистрируем в стеке
try {
    $file_loader = APP . DS. 'core' . DS . 'autoloader.php';
    $class_loader = \App\Core\AutoLoad::class;
    $method_loader = 'loader';

    if (!is_readable($file_loader)){
        throw new Exception('<h3>Не найден файл</h3>' . $file_loader );
    }
    require_once $file_loader;
    if (!class_exists($class_loader)){
        throw new Exception('<h3>Класс автозагрузчика не найден</h3>');
    } elseif (!method_exists($class_loader, $method_loader)){
        throw new Exception('<h3>Метод автозагрузчика не найден</h3>');
    }
    spl_autoload_register([$class_loader, $method_loader]);
} catch (Exception $e) {
    echo '<p><b>Ошибка в файле:</b><br>' . $e->getFile() . '</p>';
    die($e->getMessage());
}


//Запускаем роутер
\App\Core\Router::Run();

?>