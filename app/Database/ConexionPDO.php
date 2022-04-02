<?php
namespace App\Database;

class ConectionPDO
{
    static function createConection()
    {
        $dsn = 'mysql:dbname=dbtienda;host=localhost';
        $password = '';
        $conection = new \PDO('',$username,'');
        return $conection;
    }   
}