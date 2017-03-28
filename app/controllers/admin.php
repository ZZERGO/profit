<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 11.02.2017
 * Time: 13:31
 */

namespace app\controllers;


class Admin extends App
{

    public function action_default()
    {
        // TODO: Implement action_Default() method.

    }

    /**
     * Добавляет новость в базу данных
     */
    public function action_addNews()
    {

    }


    /**
     * Добавляет пользователя в базу данных
     */
    public function action_addUser()
    {
       ////$tpl = 'user_add';

       //if ($_POST) {
       //    echo '<h2>Данные приняты</h2>';
       //    $user = new \App\Models\User();
       //    foreach ($_POST as $key => $value){
       //        if ('enter' == $key){
       //            continue;
       //        }
       //        $user->$key = $value;
       //    }
       //    $user->save();
       //}

       //$tplfile = TPL_DIR . DS . $this->config->tpl['name'] . DS . $tpl . '.tpl';

       //$this->view->display($tplfile);
    }

}