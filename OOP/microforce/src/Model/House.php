<?php
namespace MicroForce\Model;

use Microforce\Model\housing;

class House extends housing
{
    private $gardenSize;
    
    public function __construct(float $size, int $rooms, string $location = null, float $gardenSize = null)
    {
        $this->setGardenSize($gardenSize);
        parent::__construct($size, $rooms, $location);
    }
    
    public function  getGardenSize()
    {
        return $this->gardenSize;
    }
    
    private function setGardenSize($gardenSize)
    {
        $this->gardenSize = $gardenSize;
    }
    
}

