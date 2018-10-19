<?php

function getAllMondaysOfMonth($anne, $mois){
    $mondays = [];
    $date = DateTime::createFromFormat('Yn', $anne.$mois);
    //F	Mois, textuel, version longue; en anglais, comme January ou December	January � December
    $date = new DateTime('first day of '.$date->format('F Y'));
    
    $interval = DateInterval::createFromDateString('next monday');
    //N	Repr�sentation num�rique ISO-8601 du jour de la semaine (ajout� en PHP 5.1.0)
    if ($date->format('N') != 1) {
        $date->add($interval);
    }
    //m	Mois au format num�rique, avec z�ros initiaux	01 � 12
    while ($date -> format('m') == $mois) {
        //l ('L' minuscule)	Jour de la semaine, textuel, version longue, en anglais
        //j	Jour du mois sans les z�ros initiaux	1 � 31
        //M	Mois, en trois lettres, en anglais	Jan � Dec
        //Y	Ann�e sur 4 chiffres	Exemples : 1999 ou 2003
        $mondays[] = $date -> format('l j, M Y') ;
        $date -> add($interval);
    }
    return $mondays;
}
