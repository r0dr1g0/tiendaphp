<?php
namespace App\Database;

class ConectionPDO
{
    static function createConection()
    {
        try
        {
            $dsn = 'mysql:dbname=dbtienda;host=localhost';
            $username = 'root';
            $password = '';
            $conection = new \PDO('',$username,'');
            return $conection;
        }
        catch{
            echo 'error de conexion en la bd';
        }
    }   
}