<?php
namespace App\Extractor;

use Symfony\Component\PropertyAccess\PropertyAccessor;

class DefaultExtractor implements ExtractorInterface
{
    private $instanceType;
    
    private $target;
    
    private $accessor;
    

    public function __construct(
        string $instanceType,
        string $target,
        PropertyAccessor $accessor
        ) {
         $this->instanceType = $instanceType;
         $this->target = $target;
         $this->accessor = $accessor;
    }

    public function extract($element)
    {
        if(! $element instanceof $this->instanceType) {
            throw new \RuntimeException('Instance of'.$this->InstanceType.' required');
        }
        if(!$this->accessor->isReadable($element, $this->target)) {
            throw new \LogicException('Property does not exist');
        }
        
        return $this->accessor->getValue($element, $this->target);
    }
    
    public function extractList(array $elements) : array
    {
        $valueArray = [];
        foreach ($elements as $element) {
            $valueArray[] = $this->extract($element);
        }
        return $valueArray;
    }

}

