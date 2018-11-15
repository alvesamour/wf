<?php 
namespace Animal;

class Dog {
    public const DOG_NAME = 'Ding';
    public const DOG_RACE = ['Pitbull', 'Husky'];
    public const DOG_COLOR = ['black', 'White'];
    
    private $name;
    private $race;
    private $bodyColor;
    
    public function __construct(string $name, string $race, string $bodyColor) {
        $this->setName($name)
        ->setRace($race)
        ->setBodyColor($bodyColor);
    }
    
   
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @return mixed
     */
    public function getBodyColor()
    {
        return $this->bodyColor;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {   
        if ($name != self::DOG_NAME) {
        Throw new \RuntimeException('Bad name');   
        }
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $age
     */
    public function setRace($race)
    {
        if (!in_array($race, self::DOG_RACE)) {
            Throw new \RuntimeException('it\'s not a race');
        }
        
        $this->race = $race;
        return $this;
    }

    /**
     * @param mixed $bodyColor
     */
    public function setBodyColor($bodyColor)
    {
        if (!in_array($bodyColor, self::DOG_COLOR)) {
            Throw new \RuntimeException('it\'s not a color of dog');
        }
        $this->bodyColor = $bodyColor;
        return $this;
    }

    public function drink()
    {
        echo 'The Dog drink<br/>';
    }
    
    public function eat()
    {
        return 'The Dog eat<br/>';
    }
    
    public function bark(){
        return "Woof! Woof!";
    }

}


