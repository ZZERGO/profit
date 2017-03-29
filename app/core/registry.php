<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 29.03.2017
 * Time: 21:06
 */

namespace App\Core;


class Registry
{
    private static $instance = null;
    private $objects = [];

    private function __construct()
    {
        $config = Config::Instance('app');
        foreach ($config->app['components'] as $name => $class){
            $this->objects[$name] = new $class;
        }
    }

    public static function getInstance()
    {
        if (null == self::$instance){

            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __get($name)
    {
        if (is_object($this->objects[$name])){
            return $this->objects[$name];
        }
    }

    public function __set($name, $value)
    {
        if (!isset($this->objects[$name])){
            $this->objects[$name] = new $value;
        }
    }


}