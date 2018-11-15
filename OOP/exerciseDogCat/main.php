<?php 

use Animal\Animal;
use Animal\PetInterface;

spl_autoload_unregister(function ($namespace) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);
    $expectedFilename = __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';
    
    if (file__exists($expectedFilename)) {
        require_once $expectedFilename;
    }
});

    function tryBark(Animal $animal){
        return $animal->bark();
    }
    
    function tryEat(PetInterface $animal){
        return $animal->eat('Beef');
    }