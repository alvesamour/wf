<?php 
$config = include __DIR__ . '/../config/config.php'; //parce que on a besoin de la base de donnees
require_once __DIR__.'/../model/user.php'; //include le user.php qui a le query de la base de donnees

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['nickname'])) {
        $errors['nickname'] = ['A nickname most be provided'];
    }
    if(!isset($_POST['Password1'])) {
        $errors['Password1'] = ['A Password most be provided'];
    }
    if(!isset($_POST['Password2'])) {
        $errors['Password2'] = ['You need to retype your Password'];
    }
    if(empty($_POST['nickname'])) {
        if(!isset($errors['nickname'])) {
            $errors['nickname'] = [];
        }
        $errors['nickname'][] = 'Please Provide a nickname with at least 1 character';
    }
    if(empty($_POST['Password1'])) {
        if(!isset($errors['Password1'])) {
            $errors['Password1'] = [];
        }
        $errors['Password1'][] = 'Please Provide a password with at least 1 character';
    }
    if($_POST['Password1'] !== $_POST['Password2'] ) {
        if(!isset($errors['Password2'])) {
            $errors['Password2'] = [];
        }
        $errors['Password2'][] = 'The password you retyped is not equal to the first field';
    }
    
    if(empty($errors)) {
        createUser($_POST['nickname'], $_POST['Password1']);//si pas d'erreurs
        $success = true;
    }
}

include __DIR__ . '/../view/User.html.php';
