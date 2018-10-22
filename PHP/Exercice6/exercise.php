<?php
// in a function named easterReverse
function easterReverse($filePath) {
    //i assume a file path as first parameter
    
    //get the full file content
    $fileContent = file_get_contents($filePath);
    //devide the file content by 2, using "floor(strlen($fileContent) / 2
    $secondPart = substr($fileContent, floor(strlen($fileContent) / 2));
    $firstPart = substr($fileContent, 0, strlen($secondPart) - 1);
    
    //open the file in writing mode
    $file = fopen($filePath, 'r+');
    //move the cursor to the first content part lenght
    fseek($file, strlen($firstPart), SEEK_SET);
    //write the reversed second part into the file (strrev)
    fwrite($file, strrev($secondPart), strlen($secondPart));
    
    //close the file
    fclose($file);
}
