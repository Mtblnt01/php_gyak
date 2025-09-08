<?php 

/*
    1. if, else, elseif
    2. switch
    3. Ciklusok: for, while, foreach
    4. Ternary operator
    5. Tömbök (indexelt, asszociatív, tömbök tömbje)

*/
// egy számról döntsd el hogy az páros e
$number = 7;
if ($number % 2 == 0) 
    echo "$number páros szám";
else 
    echo "$number páratlan szám";

$result = ($number % 2 == 0) ? "páros" : "páratlan";
echo "A(z) $number egy $result szám";
?>