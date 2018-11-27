<?php
namespace Microforce\Model;

class housing
{
    private $id;
    private $size;
    private $rooms;
    private $location;
    
    public function __construct(float $size, int $rooms, string $location = null)
    {
        
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $size
     */
    private function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @param mixed $rooms
     */
    private function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @param mixed $location
     */
    private function setLocation($location)
    {
        $this->location = $location;
    }

    
    
}

