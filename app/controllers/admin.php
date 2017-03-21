<?php
/**
 * Created by PhpStorm.
 * User: trushkov
 * Date: 11.02.2017
 * Time: 13:31
 */

namespace app\controllers;


use App\Core\Controller;

class Admin extends Controller
{

    public function action_Default()
    {
        // TODO: Implement action_Default() method.
        echo '<h1>Главная страница Админ-панели </h1>';

        echo '<a href="/admin/addnews">Добавить новость</a> | <a href="/admin/adduser">Добавить пользователя</a> | <a href="/">На главную</a>';

    }

    /**
     * Добавляет новость в базу данных
     */
    public function action_AddNews()
    {
        if ($_POST) {
            echo 'OK';

            $post = new \App\Models\Article();
            foreach ($_POST as $key => $value){
                if ('enter' == $key){
                    continue;
                }
                $post->$key = $value;
            }
            $post->save();
        }
        $tplfile = TPL_DIR . DS . $this->config->tpl['name'] . DS . 'post_add.tpl';

        $this->view->display($tplfile);
    }


    /**
     * Добавляет пользователя в базу данных
     */
    public function action_AddUser()
    {
        if ($_POST) {
            echo '<h2>Данные приняты</h2>';

            $user = new \App\Models\User();
            foreach ($_POST as $key => $value){
                if ('enter' == $key){
                    continue;
                }
                $user->$key = $value;
            }
            $user->save();
        }

        $tplfile = TPL_DIR . DS . $this->config->tpl['name'] . DS . 'user_add.tpl';

        $this->view->display($tplfile);
    }

}