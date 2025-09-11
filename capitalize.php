<?php 
//Készíts egy függvényt, ami átvesz egy stringet és visszaadja azt nagybetűsként
function capitalizeAll(array $names): array{
    /*$tempArray = [];
    foreach ($names as $name){
        $tempArray[] = mb_strtoupper($name);
    }
    return $tempArray;*/
    return array_map("mb_strtoupper", $names);
}
$names = ["Pista", "Béla", "Anna"];
$capitalizedNames = capitalizeAll($names);
?>