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
        //echo self::testRegexp(self::getURI());
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
        //echo urldecode(trim($_SERVER['REQUEST_URI'], '/'));
        return urldecode(trim($_SERVER['REQUEST_URI'], '/'));
    }

    /**
     * проверяем строку запроса на совпадение с существующими маршрутами
     * @param string $uri Строка запроса
     * @return bool
     */
    public static function matchRoute($uri)
    {
        //echo '<h2>Текущий URI: ' . self::getURI() . '</h2>';
        foreach (self::$routes as $pattern => $route){

            if ( preg_match("#$pattern#i", $uri, $matches)){
                //echo 'Паттерн: ' . $pattern . '<br>';
                //echo 'ROUTE';
                //var_dump($route);

                //echo 'MATCHES';
                //var_dump($matches);

                self::$route = $route;
                //echo '<h3>Совпадение найдено</h3>';

                //echo 'Текущий Route:';
                //var_dump(self::$route);
                foreach ($matches as $key => $value){
                    if (is_string($key)){
                        self::$route[$key] = $value;
                    }
                }

                //echo 'Финальный Route:';
                //var_dump(self::$route);
                return true;
            }
        }
        echo '<h3>Совпадений НЕТ</h3>';
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
        //echo '<h3>Строка URI: ' . $uri . '</h3>';

        if (self::matchRoute($uri)){
            $controller = 'App\Controllers\\' . self::upperCamelCase(self::$route['controller']);
            //echo '<h3>Контроллер: ' . $controller . '</h3>';
            if (class_exists($controller)){
                $cObj = new $controller(self::$route);
                //var_dump(self::$route);
                $action = 'action_' . self::lowerCamelCase(ucfirst(self::$route['action']));
                //echo '<h3>Метод: ' . $action . '</h3>';
                if (method_exists($cObj, $action)){
                    $cObj->$action(self::$route);
                    $cObj->getView();
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