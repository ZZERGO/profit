<?php

namespace App\Core;

abstract class AutoLoad
{
    public static function loader($className){
        $toLower = strtolower($className);
        $array =  explode('\\', $toLower);
        $file =  ROOT . DS . implode(DS, $array) . '.php';


        try{
            if(file_exists($file) & is_readable($file)){
                require_once $file;
            }else{
                throw new \Exception ("<h3>Отсутствует файл $file");
            }
        } catch (\Exception $e) {
            echo '<h2>ОШИБКА:</h2> ' . $e->getMessage();
        }
    }

}