<?php

namespace App\Core;
use App\Models\Db;


/**
 * Class Model
 * @package App\Core
 * @property $id
 * @property $table
 * @property $config
 */
abstract class Model
{
    public static $table;
    public $id;
    public $config;



    /** Находим все элементы и возвращаем в виде массива объектов нужного класса
     * @return array|bool|\PDOStatement
     */
    public static function findAll(){
        $db = Db::Connect();
        $sql = 'SELECT * FROM ' . static::$table;
        $res = $db->query($sql, [], static::class);
        if (!empty($res[1])){
            return $res;
        } elseif (isset($res[0])) {
            return $res[0];
        } else {
            return null;
        }
    }


    /** Находим элемент таблицы с указанным id
     * @param $id int
     * @return object Возвращаем один объект нужного класса с указанным id
     */
    public static function findById($id){

        $db = Db::Connect();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $res = $db->query($sql,[':id' => $id], static::class);
        return isset($res[0]) ? $res[0] : null;
    }


    /** Находим последние $count записей
     * @param  $count int Количество последних записейй
     * @return array|\PDOStatement
     */
    public static function findLast (int $count = 3)
    {
        $db = Db::Connect();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER by id DESC LIMIT ' . $count;
        $res = $db->query($sql, [], static::class);
        if (isset($res[0])){
            return $res;
        }
    }


    /** Проверям что новая запись или нет
     * @return bool
     */
    public function isNew(){
        return is_null($this->id);
    }


    /**
     * Записываем объект в БД
     */
    public function save() {
        if ($this->isNew()){
            $this->insert();
        } else {
            $this->update();
        }
    }


    /**
     * Вставляем новую запись в БД
     */
    public function insert(){
        $columns = [];
        $binds = [];
        $data = [];
        foreach ($this as $column => $value){
            if ('id' == $column || null == $value){
                continue;
            }
            $columns[] = $column;
            $binds[] = ':' . $column;
            $data[':' . $column] = $value;
        }
        $colArray = implode(', ', $columns);
        $bindsArray = implode(', ', $binds);
        $sql = 'INSERT INTO ' . static::$table . ' (' . $colArray . ') VALUES (' . $bindsArray . ')';
        $db = Db::Connect();
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
    }


    /**
     * Сохраняем изменившиеся параметры объекта в БД
     */
    public function update(){
        $colArray = [];
        foreach ($this as $property => $value){
            if ('id' == $property){
                continue;
            }
            $colArray[] = '`' . $property . '` = \'' . $value . '\'';
        }
        $binds = implode(', ', $colArray);
        $sql = 'UPDATE `' . static::$table . '` SET ' . $binds . ' WHERE `id`=' . $this->id;
        $db = Db::Connect();
        $db->execute($sql);
    }

    /**
     * Удаляем объект из БД
     */
    public function delete(){
        $sql = 'DELETE FROM ' . static::$table . ' WHERE `id`=' . $this->id;
        $db = Db::Connect();
        $db->execute($sql);
    }
}