<?php
namespace NovemBit\ActiveData\tests\models;

class ActiveRecord extends \NovemBit\ActiveData\ActiveRecord
{

    private static $_pdo;

    public static function pdo()
    {
        if (!isset(self::$_pdo)) {
            self::$_pdo = new \PDO('mysql:host=localhost;dbname=swanson', 'root', 'root', []);
        }
        return self::$_pdo;
    }

}