<?php
/**
 *  Формируем ссылки вида /news/sport/23
 *  news - контроллер, sport - категория новости, 23 - id новости в базе данных
 *
 */
namespace App\Core;

class Router
{
    private $routes = []; // Шаблоны маршрутов
    private $route = []; // Текущий маршрут
    private $uri = ''; // Текущий запрос
    private $path = 'App\Controllers\\';
    private $controller = 'Index';
    private $action = 'action_Default';
    private $params = [];

    // создаём экземпляр объекта
    public static function Run(){
        new self();
    }

    private function __construct()
    {
        $this->routes = $this->getConfig();
        $this->uri =  $this->getURI();
        $this->dispatch();
    }

    private function getURI()
    {
        return urldecode(trim($_SERVER['REQUEST_URI'], '/'));
    }

    /**
     * Перенаправляет URL по корректному маршруту
     * @param $url string Входящий URL
     * @return void
     */
    private function dispatch()
    {
        // проверяем на совпадение запроса с маршрутами
        if ($this->matchRoute()) {
            echo '<h1> СОВПАДЕНИЕ МАРШРУТА</h1>';

        } elseif(!$this->explodeRoute()) {
            echo '<h1>Маршрут не найден</h1>';
            $this->controller = $this->path . $this->controller;
            $this->action = 'action_Error404';
        }

        echo 'Текущий маршрут:';
        var_dump($this);

        echo '<br><b>Контроллер:</b>' . $this->controller;
        echo '<br><b>Экшен:</b>' . $this->action;

        $this->exec();

    }


    /** проверяем строку запроса на совпадение с существующими маршрутами
     * @return bool
     */
    private function matchRoute()
    {
        foreach ($this->routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $this->uri, $match)) {
                var_dump($pattern);
                $route = explode('/', preg_replace('#'.$pattern.'#i', $route, $this->uri));
                $this->controller = $this->path . array_shift($route);
                $this->action = 'action_' . array_shift($route);
                return true;
            }
        }
        return false;
    }


    // Разбиваем строку запроса по слешам и получем из неё контроллер/метод и GET параметры
    private function explodeRoute()
    {
        if (!empty($this->uri)){
            $uri_parts = explode('/', $this->uri);

            // Получаем контроллер из первой части строки запроса (из текущего роута)
            if (class_exists($this->path . ucfirst(current($uri_parts)))){
                $this->route['controller'] = current($uri_parts);
                $this->controller = $this->path . ucfirst(array_shift($uri_parts));

                // Получаем экшен из строки запроса
                if (!empty(current($uri_parts))){
                    if (method_exists( new $this->controller, 'action_'.current($uri_parts))){
                        $this->route['action'] = current($uri_parts);
                        $this->action = 'action_' . ucfirst(array_shift($uri_parts));
                        echo '<h1>Метод существует</h1>';
                    }
                }
                return true;
            }
        }
        return false;
    }


    // Вызываем нужный метод в нужном классе
    private function exec()
    {
        if (method_exists($this->controller, $this->action)){
            call_user_func_array([new $this->controller, $this->action], $this->route);
        } else {
            die("Метод не существует");
        }

    }


    /**Получаем маршруты из файла конфигурации
     * @return array
     */
    private function getConfig(): array
    {
        $conf = Config::Instance('routes');
        return $conf->routes;
    }
}
