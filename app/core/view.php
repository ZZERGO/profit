<?php

namespace App\Core;


/**
 * Class View
 * @package App\Core
 * @property $data
 * @property $news
 */
class View
    implements \Countable
{
    public $data = [];


    /**
     * @param $key
     * @param $value
     */
    public function __set($key, $value){
        $this->data[$key] = $value;
    }

    public function __get($key){
        return $this->data[$key];
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

    public function display($tpl)
    {
        echo $this->render($tpl);
    }

    /**
     * @param $tpl string Путь к шаблону
     * @return string Возвращает HTML код для отображения
     */
    public function render($tpl){
        ob_start();

        foreach ($this->data as $key => $value){
            $$key = $value;
        }
        if (file_exists($tpl)){
            include $tpl;
        } else {
            echo 'Не найден файл шаблона' . $tpl . '<br>';
        }
        $html = ob_get_contents();

        ob_end_clean();
        return $html;
    }



    public function count()
    {
        return count($this->data);
    }


    public function getContent(){

        return $html;
    }

}