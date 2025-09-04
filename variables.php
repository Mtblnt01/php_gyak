<?php
    /*
    Szükséges programok: XAMPP (Apache, MySql), Git, Github repo, VSC
    <?php ... ?>
    
    
    */
    $name = "mozso";
    $age = 18;
    $city = "Kisújszállás";

    var_dump($name);
    echo "\n<br>\nNév: $name \nÉletkor: $age \nLakóhely: $city";
    //konstans
    define("PI", 3.14);
    echo "<br>", PI;

    //adattípusok: string, int, float, bool, array,
    $message = "1";
    echo "Kiír", $message, "értéket.", "<br>\n";
    echo "Kiír $message értéket.", "<br>\n";
    echo "Kiír {$message}darab értéket.", "<br>\n";
    echo 'Kiír {$message}darab értéket.', "<br>\n";
?>