<?php
$file = 'Search-terms.txt';
$myfile = fopen("Search-terms.txt", "r") or die ("Unable to open file!");
$procedures = array();

for($i = 0; $i < count(FILE($file)); $i++){
    $tempVar = fgets($myfile);
    array_push($procedures, $tempVar);
}

fclose($myfile);
?>
