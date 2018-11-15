<?php 
namespace Animal;

class Dog extends Animal implements PetInterface
{
    public function bark() {
        return 'Wafff';
    }
    
    public function eat() {
        return 'Eat well';
    }
    
    public function drink() {
        return 'Drink wather';
    }
    
    public function eat($whet)
    {
        return 'Need go out';
    }
}