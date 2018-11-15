<?php

namespace Animal;


class Dog
{
    private const MIN_AGE = 0;
    
    private const MAX_AGE = 25;
    
    private const ALLOWED_COLOR = ['brown', 'grey', 'white', 'black'];
    
    private const ALLOWED_RACE = ['Bulldog', 'bastard'];
    
    private $color;
    
    private $race;
    
    private $age;
    
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
        return 'Ouaf Ouaf';
    }
    
    public function purr()
    {
        return 'Attack';
    }
    
    public function sit()
    {
        return '';
    }
    
    public function addOneYear()
    {
        $this->age++;
        if ($this->age >= self::MAX_AGE) {
            $this->age = self::MAX_AGE - 1;
        }
    }
}
