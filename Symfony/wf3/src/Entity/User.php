<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

class User implements UserInterface
{
    private $password;
    private $salt;
    private $username;
    private $roles;
    
    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    public function eraseCredentials()
    {}

    public function getSalt()
    {
        return $this->salt;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
