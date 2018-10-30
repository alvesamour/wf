<?php 
$config = include __DIR__ . '/../config/config.php';
require_once __DIR__.'/../model/user.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    if(!isset($_POST['nickname']) || empty($_POST['nickname']) || !isset($_POST['Password'])) {
       $error = true;
    }
       
    try {
         $users = loginUser($_POST['nickname']);
    } catch (Exception $e) {
           $error = true;
    }
       
    if ($users && $_POST['Password'] == $users['password']) {
        LogUser($users);
         $success = true;
    } else {
         $error = true;
    }
}


include __DIR__ . '/../view/login.html.php';
if (session_status() === PHP_SESSION_ACTIVE) {
    session_write_close();
}
