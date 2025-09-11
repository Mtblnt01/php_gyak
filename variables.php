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

    //print "Kiír". $message. "értéket.", "<br>\n";
    /* 
    git parancsok 
        git init:: helyi repo inicializalasa
        git add . ,minden modositott fajl hozzaadasa a staging area-hoz
        git commit -m "uzenet" :: változtatások elmentése a helyi repoba
        git branch -M main :: fo ag mainre atnevezese
        git remote add origin <url> :: tavoli repo hozzadasa
            git config --global user.name "felhasznalonev"
            git config --global user.email "emailcim"
        git push -u origin main :: fajlok feltoltese a tavoli repoba


        HF: tölsd le otthon a repot a sajat htdocs mappádba
    */
?>

