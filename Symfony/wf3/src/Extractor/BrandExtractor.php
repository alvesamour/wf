<?php
namespace App\Extractor;

use App\DTO\Car;

class BrandExtractor implements ExtractorInterface
{
    /**
     * Extract
     * 
     * Extract the brand of the given car. Throw RuntimeException
     * if parameter is not a Car interface.
     * 
     * @param Car $element The Car from where extract the brand
     * 
     * @return string
     * @throw \RuntimeException
     */

    public function extract($element)
    {
        if(! $element instanceof Car) {
            throw new \RuntimeException('Instance of car required');
        }
        return $element->brand;
    }

    /**
     * Extract list
     * 
     * Extract a list of brand from a list of car. Throw RuntimeException
     * if one of the given elements is not a car.
     * 
     * @param array $elements The list of car from where extract the brands.
     * 
     * @return array
     * @throws \RuntimeException
     */
    public function extractList(array $elements) : array
    {
        $brandArray = [];
        foreach ($elements as $element) {
            $brandArray[] = $this->extract($element);
        }
        return $brandArray;
    }
}

