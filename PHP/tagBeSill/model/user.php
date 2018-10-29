<?php 

require_once __DIR__ . '/connection.php';

/**
 * Create a new user
 * 
 * This function create a new entry in the database and return the id 
 * of the inserted element.
 * 
 * 
 * @param string $nickname the new entry nickname
 * @param string $password the new entry password
 * 
 * @return int
 */

function createUser(string $nickname, string $password, int $roleId = 1) : int {//return the id of the inserted element
    global $connection;

    $user = 'INSERT INTO User (nickname, password, roleId) VALUE (:nickname, :password, :roleId)';
    $stmt = $connection->prepare($user);
    $stmt->bindValue('nickname', $nickname);
    $stmt->bindValue('password', $password);
    $stmt->bindValue('roleId', $roleId);
    $result = $stmt->execute();
    
    if (!$result) {
        throw new RuntimeException($connection->errorCode());
    }
    return $connection->lastInsertId();
    
}

function loginUser(string $nickname) : ?array { 
    /**
     * @var PDO $connection
     */
    global $connection;
    
    $preparedQuery = $connection->prepare( 'SELECT * FROM user WHERE nickname = :name');
    $preparedQuery->bindValue('name', $nickname);
    $resultat = $preparedQuery->execute();
    
    if ($resultat === false) {
        throw new RuntimeException($connection->errorCode());
    }
    $resultat = $preparedQuery->fetch();
    
    if($resultat) {
        return $resultat;
        
    }
    return null;
    
}