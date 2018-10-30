<?php 
$config = include __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/user.php';

Logout();
session_write_close();

header('Location: /');//go back the homepage, send before input. Never close PHP in PHP File
