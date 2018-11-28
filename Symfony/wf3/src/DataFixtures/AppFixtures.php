<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Brand;
use App\Entity\Seat;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadBrands($manager);
        $this->loadSeats($manager);
        $manager->flush();
    }
    
    public function loadBrands(ObjectManager $manager)
    {
        $brandList = [
            'fiat',
            'pagani',
            'koenigsegg',
            'bugatty',
            'volkswagen',
            'renault',
            'porsche',
            'ferrari',
            'opel',
            'audi'
        ];

        foreach ($brandList as $label){
            $brand = new Brand();
            $brand->setName($label);
            
            $manager->persist($brand);
        }
        $manager->flush();
    }
    
    public function loadSeats(ObjectManager $manager)
    {
        $seatList = [
           'front-right',
            'front-left',
            'back-right',
            'back-right'
        ];
        
        foreach ($seatList as $label){
            $seat = new Seat();
            $seat->setLabel($label);
            
            $manager->persist($seat);
        }
        $manager->flush();
    }
    
}
