<?php
$password;
$salt;

$partOne = substr($password, 0, floor(strlen($password) / 2) + (strlen($password) % 2));
$partEnd = substr($password, ceil(strlen($password)/2));
$saltedPassword = $partOne.$salt.$partEnd;


