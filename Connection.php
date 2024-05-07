<?php

class Connection
{
    const USER='root';
    const PASSWORD='Acsdoha2023!';
    const HOST='localhost';
    const DBNAME = 'ecommerce';

    public static function getConnection():PDO {
        try {
            $dsn = 'mysql:dbname='.self::DBNAME.";host=".self::HOST;
            return new PDO($dsn,self::USER, self::PASSWORD);

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
    }
}

