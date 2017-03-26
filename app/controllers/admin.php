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

    public function action_default()
    {
        // TODO: Implement action_Default() method.
        echo '<h1>Главная страница Админ-панели </h1>';

        echo '<a href="/admin/add-news">Добавить новость</a> | <a href="/admin/add-user">Добавить пользователя</a> | <a href="/">На главную</a>';

    }

    /**
     * Добавляет новость в базу данных
     */
    public function action_addNews()
    {
        $tpl = 'post_add';

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
        $tplfile = TPL_DIR . DS . $this->config->tpl['name'] . DS . $tpl . '.tpl';

        $this->view->display($tplfile);
    }


    /**
     * Добавляет пользователя в базу данных
     */
    public function action_addUser()
    {
        $tpl = 'user_add';

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

        $tplfile = TPL_DIR . DS . $this->config->tpl['name'] . DS . $tpl . '.tpl';

        $this->view->display($tplfile);
    }

}