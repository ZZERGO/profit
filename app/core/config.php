<?php
/*

*/
namespace App\Core;

/** Считывает и возврщает объект с массивом параметров
 * Class Config
 * @package App\Core
 * @property $tpl array
 * @property $db array
 * @property $site array
 * @property $routes araay
 */
class Config {

    protected static $instance = null;
    protected static $data = [];


    /**
     *
     * @param string $name Префикс имени файла конфигурации
     * @return Config|null Возвращает объект с массивом параметров
     */
    public static function Instance($name=null)
    {
        if (null == self::$instance){
            self::$instance = new self($name);
        } else {
            if (!empty($name)){
                self::$data[$name] = self::$instance->loadConfig($name);

                self::$instance->set($name, self::$data[$name]);
            }
        }
        return self::$instance;
    }


    /**
     * Config constructor.
     * @param $name string Префикс имени файла конфигурации
     */
    private function __construct($name=null)
    {
        if (!empty($name)){
            self::$data[$name] = $this->loadConfig($name);
            $this->set($name, self::$data[$name]);
        }
    }


    /** Загружает параметры из файла конфигурации с префиксом имени $name
     * @param string $name Префикс имени файла конфигурации
     * @return mixed Возвращает массив, описанный в файле конфигурации
     */
    private function loadConfig(string $name)
    {
        $file = ROOT . DS . 'config' . DS . $name . '.config.php';
        if (is_readable($file)) {
            $config = include $file;
        } else {
            echo 'Не найден файл с настройками ' . $file;
            die();
        }
        return $config;
    }


    /** Устанавливает значения элемента массива $data в соответствии с полученным массивом параметров $config
     * @param string $name Префикс имения файла конфигурации, а также имя ключа в массиве конфигураций $data
     * @param $config array Массив параметров
     * @param $name string Имя ключа в массиве параметров $data
     */
    protected function set(string $name, array $config)
    {
        foreach ($config as $key => $value){
            $this->$name[$key] = $value;
        }
    }
}
?>