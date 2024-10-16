<?php
$note = [
    "L'île au tresor" => "1883" ,
    "Heather Ale" => "1890",
    "Enlevé" => "1886",
] ;
asort($note);
foreach($note as $key => $value)
echo "$value " . " $key . ";
?>