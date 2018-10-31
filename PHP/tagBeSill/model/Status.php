<?php

require_once __DIR__ . '/connection.php';

function findAllStatus() {
    global $connection;
    $statement = 'SELECT * FROM Status';
    $statusList = $connection->query($statement)->fetchAll(PDO::FETCH_CLASS, stdClass::class);//PDO::FETCH_CLASS, stdClass::class like an array - 
    if ($statusList === false) {
        throw new Exception($connection->errorCode());
    }

    return $statusList;
}
