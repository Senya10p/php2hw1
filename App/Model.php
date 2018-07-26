<?php


namespace App;


abstract class Model
{
    public $id; //публичное свойство id полагая, что во всех таблицах есть id
    protected static $table = null; //статическое св-во

    //abstract public function getModelName(); //обязывает в классах наследниках объявить этот метод, но уже конкретно!

    public static function findAll()
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, static::class); //Используем статическое свойство
    }

    public static function findBiId($id) //4. Добавляем метод, который возвращает либо одну запись по id, либо false
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id ';
        //var_dump($sql);
        $data = $db->query( $sql, static::class, [':id' => $id] );

        if ( false === $data || empty($data) ) {

            return false;
        }
        return $data[0];
    }

}