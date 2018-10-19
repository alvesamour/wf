<?php

$input;
$winner;

$brotherA = 0;
$brotherB = 0;

foreach ($input as $player) {
    //extract value and put in the same line
    //list — Assigne des variables comme si elles étaient un tableau
   list($brotherA, $brotherB) = $player;
   
   if ($brotherA > $brotherB) {
       $resultatA++;
   } else if ($brotherB > $brotherA){
       $resultatB++;
   }
}
    
if ($resultatA > $brotherB) {
    $winner = 'A';
}else if ($resultatB > $brotherA){
    $winner = 'B';
}

echo $winner;