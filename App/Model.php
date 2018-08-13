<?php

namespace App;

abstract class Model
{
    protected $id; //свойство id, полагая, что во всех таблицах есть id

    protected static $table = null; //статическое св-во

    public function getId()
    {
        return $this->id;
    }

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, static::class); //Используем статическое свойство
    }

    public static function findById(string $id) //4. Добавляем метод, который возвращает либо одну запись по id, либо false
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $data = $db->query( $sql, static::class, [':id' => $id] );

        if ( empty($data[0]) ) {
            return false;
        }
        return $data[0];
    }
}