<?php

//function devide if divisor is zero
function divide(int $baseDividir, int $byZero) : float {
    if($byZero==0){
      throw new RuntimeException('Division by 0 is not allowed'); 
    }
    return $baseDividir/$byZero;
}

//function arrayDevide with values to devide $baseDividir to the divisor $byZero
function arrayDivide(array $baseDividir, int $byZero) : array {
    //Array empty
    $resultat = [];
    //If the divisor is zero 
    foreach ($baseDividir as $baseDiv) {
        try {
            $resultat[] = divide($baseDiv, $byZero);
            //catch the exception
        } catch (RuntimeException $exception) {
            $resultat[] = $baseDiv;
        }
    }
    //return the array of value
    return $resultat;
}