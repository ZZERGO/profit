<?php

class AutoLoad
{
    public static function loader($className){
        $toLower = strtolower($className);
        $array =  explode('\\', $toLower);
        $file =  dirname(__FILE__) . DS . '..' . DS . '..' . DS . implode(DS, $array) . '.php';


        try{
            if(file_exists($file)){
                require_once $file;
                //echo '<h4>Подключен файл - ' . $file . '</h4>';
            }else{
                throw new Exception ('Отсутствует файл ' . strtolower($file) . ' класса ' . $className . '.php');
            }
        } catch (Exception $e) {
            echo '<h2>ОШИБКА:</h2> ' . $e->getMessage();
        }
    }

}