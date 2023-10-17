<?php

class connect_db{
    const localhost = 'localhost';
    const database = 'oop';
    const username = 'root';
    const password = '';


    public static function connect(){
        $pdo = new PDO('mysql:host=' . self::localhost . ';dbname=' . self::database, self::username, self::password);
        return $pdo;
    }

}
