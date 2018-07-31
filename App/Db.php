<?php

namespace App;

class Db    //2. Улучшаем класс Db.
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=php2test', 'root', '');
    }

    public function query( string $sql, string $class, array $data = [] ) //2.2 Добавляем в метод возможность передавать подстановку в запрос
    {
        $sth = $this->dbh->prepare($sql);

        if (false !== $sth) {
            if ( $sth->execute($data) ) {

                return $sth->fetchAll( \PDO::FETCH_CLASS, $class );
            }
        }
    }

    public function execute( string $query, array $params = [] ) //2.3 Добавляем описание метода execute( $query, $params = [] )
    {
        $sth = $this->dbh->prepare($query);

        if (false !== $sth) {

            return $sth->execute($params);
        }
    }

}