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
echo "A(z) $number egy $result szám<br>";


//ciklussal irasd ki 1-10ig a számokat
for ($i=0; $i < 10 ; $i++) { 
    $out = $i+1;
    echo "{$out}<br>";
}

//hozz létre egy indexelt tömböt 5 gyümölccsel és írasd ki
$fruits = array("apple", "pear", "peach", "plum", "melon");
//$things = array("this, "that")
for ($i=0; $i < count($fruits); $i++) { 
    echo $fruits[$i] . "<br>";
}

echo "<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

//hozd létre a user tömböt, ami tartalmazza a következő adatokat: name, age
$user = [
    "Kiss Pista" => 20,
    "Nagy Béla" => 30,
    "Kovács Anna" => 25
];


echo "";
foreach ($user as $name => $age) {
    echo "$name: $age éves.<br>";
}

//vegyünk fel egy students tömböt, ami tömbök tömbje legyen
$students = [
    [
        "name" => "Kiss Pista",
        "age" => 20,
    ],
    [
        "name" => "Nagy Béla",
        "age" => 30,
    ],
    [
        "name" => "Kovács Anna",
        "age" => 25,
    ]
];

foreach ($students as $student) {
    echo $student["name"] . " - " . $student["age"] . " éves.<br>";
}

//hf user tomb, ami majd lehetővé teszi az autentikációt, foreachel irasd ki

?>