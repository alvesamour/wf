<?php 

namespace MicroForce\Model;

use MicroForce\connection\ConnectionSilgleton;

class Student {
    private $id;
    private $firstname;
    private $lastname;
    
    public function create(string $firstname, string $lastname) : ?Student
    {
        $connection = ConnectionSilgleton::getConnection();  
        try {
            $stmt = $connection->prepare('insert into students(firstname, lastname) value (:firstname, :lastname)');
            $stmt->bindValue('firstname', $firstname);
            $stmt->bindValue('lastname', $lastname);
            $stmt->execute(['firstname' => $firstname, 'lastname' => $lastname]);
            
            $this->id = $connection->lastInsertId();
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        } catch (\Exception $e) {
            return null;
        }
        return $this;
    }
    
    public  function update() : Student {
        $connection = ConnectionSilgleton::getConnection();
        $stmt = $connection->prepare(
            'update students set firstname = :firstname, lastname = :lastname where id = :id');
        $stmt->bindValue('firstname', $this->firstname);
        $stmt->bindValue('lastname', $this->lastname);
        $stmt->bindValue('id', $this->id);
        $stmt->execute();
        
        return $this;
    }
    
    public function delete() : bool
    {
        $connection = ConnectionSilgleton::getConnection();
        $stmt = $connection->prepare('delete from students where id = :id');
        $stmt->execute(['id' => $this->id]);
        return true;
    }
    
    static public function findAll() : array
    {
        $connection = ConnectionSilgleton::getConnection();
        $stmt = $connection->query('select * from students');
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Student::class);
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    public function getLastname()
    {
        return $this->lastname;
    }
    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
}