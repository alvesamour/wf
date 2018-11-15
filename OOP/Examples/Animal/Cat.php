<?php

namespace Animal;

/*
 * Update Dog
 *  Each setter MUST validate the input
 *  The allowed inputs MUST be defined by public constants
 */
class Cat
{
    private const MIN_AGE = 0;
    
    private const MAX_AGE = 25;
    
    private const ALLOWED_COLOR = ['brown', 'grey', 'white', 'black'];
    
    private const ALLOWED_RACE = ['sphinx', 'Siamese'];
    
    private $color;
    
    private $race;
    
    private $age = self::MIN_AGE;
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function getRace()
    {
        return $this->race;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function setColor($color)
    {
        if (!in_array($color, self::ALLOWED_COLOR)) {
            throw new \RuntimeException('Color not allowed');
        }
        $this->color = $color;
    }
    
    public function setRace($race)
    {
        if (!in_array($race, self::ALLOWED_RACE)) {
            throw new \RuntimeException('Race not allowed');
        }
        $this->race = $race;
    }
    
    public function setAge($age)
    {
        if ($age < self::MIN_AGE || $age >= self::MAX_AGE) {
            throw new \RuntimeException('Age have to be between 0 and 25');
        }
        $this->age = $age;
    }
    
    public function bark()
    {
        return 'Miaow ?';
    }
    
    public function purr()
    {
        return str_repeat('R', 10);
    }
    
    public function sit()
    {
        return $this->bark();
    }
    
    public function addOneYear()
    {
        $this->age++;
        if ($this->age >= self::MAX_AGE) {
            $this->age = self::MAX_AGE - 1;
        }
    }
}
