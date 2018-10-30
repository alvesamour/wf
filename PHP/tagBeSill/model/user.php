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

/**
 * Open a session for the user
 * 
 * User information will be setored in the session superglobal. Return true iôn success, false on failure.
 * 
 * @param array $user The user to LogicException
 * 
 * @ return bool
 */

function LogUser(array $users) : bool {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    $_SESSION['USER'] = $users;
    
    return true;
}
    /**
     * Get current user
     * 
     * Return the current logged user if exit in the session. If not, return null.
     * 
     * @return array|null
     */

function getCurrentUser() {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    return $_SESSION['USER'] ?? null;
}

/**
 * Logout
 * 
 * Remove the session 
 */

function Logout() {
    if (session_status() !== PHP_SESSION_ACTIVE) {//PHP_SESSION_ACTIVE constant
        session_start();
    }
    $_SESSION = [];
    session_destroy();
    
    return true;
}

