<?php
namespace MicroForce\connection;

class ConnectionSilgleton
{
    static private $connection;
    
    static public function getConnection() : \PDO {
        if (!self::$connection) {
            throw new \LogicException('Trying to load unconfigured PDO connection');
        }
        return self::$connection;
    }
    
    static public function setConnection(\PDO $connection) : void
    {
        self::$connection = $connection;
    }
}

