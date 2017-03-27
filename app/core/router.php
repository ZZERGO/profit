<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 26.03.2017
 * Time: 19:06
 */

namespace App\Core;


class Router
{
    private static $routes = []; // Массив маршрутов из таблицы маршрутов
    private static $route = [];  // Текущий маршрут


    public static function Run()
    {
        self::getRoutes();
        self::dispatch(self::getURI());
    }


    // Получаем массив маршрутов из таблицы маршрутов (routes.config.php)
    private static function getRoutes()
    {
        return self::$routes = Config::Instance('routes')->routes;
    }


    /**
     * @return array
     */
    private static function getRoute()
    {
        return self::$route;
    }


    // Получаем строку запроса
    private static function getURI()
    {
        return urldecode(trim($_SERVER['REQUEST_URI'], '/'));
    }

    /**
     * проверяем строку запроса на совпадение с существующими маршрутами
     * @param string $uri Строка запроса
     * @return bool
     */
    private static function matchRoute($uri)
    {
        foreach (self::$routes as $pattern => $route) {
            if ( preg_match("#$pattern#i", $uri, $matches) ) {
                foreach ($matches as $key => $value){
                    if (is_string($key)){
                        $route[$key] = $value;
                    }
                }
                if (!isset($route['action'])){
                    $route['action'] = 'default';
                }
                self::$route = $route;
                return true;
            }
        }
        return false;
    }


    /**
     * Перенаправляет URL по корректному маршруту
     * @param $uri string Входящий URL
     * @return void
     */
    private static function dispatch($uri)
    {
        $uri = self::removeQueryString($uri);
        //echo '<h3>Строка URI: </h3>' . $uri;

        if (self::matchRoute($uri)){
            //echo '<h3>Совпадение найдено</h3>';
            $controller = 'App\Controllers\\' . self::upperCamelCase(self::$route['controller']);
            echo '<h3>Контроллер: ' . $controller . '</h3>';
            if (class_exists($controller)){
                $cObj = new $controller(self::$route);
                //var_dump(self::$route);
                $action = 'action_' . self::lowerCamelCase(ucfirst(self::$route['action']));
                echo '<h3>Метод: ' . $action . '</h3>';
                if (method_exists($cObj, $action)){
                    $cObj->$action();
                } else {
                    echo '<h3>Метод не найден</h3>';
                }
            } else {
                echo "<h3>Контроллер $controller не найден</h3>";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }


    /**
     * Переводим строку вида word-word виду WordWord
     * @param $name
     * @return mixed
     */
    private static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    /**
     * Переводим строку вида word-word к виду wordWord
     * @param $name
     * @return string
     */
    private static function lowerCamelCase($name)
    {
        return lcfirst(self::upperCamelCase($name));
    }

    private static function removeQueryString($uri)
    {
        if ($uri){
            $explUri = explode('?', $uri);
            foreach ($explUri as $key => $value){
                if (false === strpos($value, '=')){
                    $uri = $value;
                }
            }
            $params = explode('&', $uri);
            //echo '<h3>Параметры строки запроса:</h3>';
            //var_dump($explUri);
        }
        return $uri;
    }
}