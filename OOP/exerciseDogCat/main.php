<?php 
//require_once 'Animal/Cat.php';
//require_once 'Animal/Dog.php';

spl_autoload_unregister(function ($namespace) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);
    $expectedFilename = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';
    
    if (file__exists($expectedFilename)) {
        require_once $expectedFilename;
    }
});

use Animal\Dog;
use Animal\Cat;

$dog = new Dog('Ding', 'Husky', 'White');
$cat = new Cat();


echo sprintf(
    'The dog Say %s when the cat say %s',
    $dog->bark(),
    $cat->purr()
);
