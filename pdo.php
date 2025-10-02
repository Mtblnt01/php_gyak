<?php
/*
CRUD: Create Read Update Delete
tfh: van egy cards táblám, amibe van name, email, id mező
backtick: altgr7 ` //ha specialis karaktert tartalmaz

1. MySQL
-READ: SELECT name, email FROM cards WHERE id=10;
-CREATE: INSERT INTO cards(`name`, `email`) VALUES ('Tibi', 'tibi@mzsrk.hu')
-UPDATE: UDPATE cards SET email='tibi2025@mzsrk.hu' WHERE id = 10;
-DELETE: DELETE FROM cards WHERE id=10;
*/

/*
CREATE DATABASE businesscards;
use businesscards;

CREATE table cards(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `companyName` VARCHAR(100) DEFAULT NULL,
    `phone` VARCHAR(20) DEFAULT NULL,
    `email` VARCHAR(100) DEFAULT NULL,
    `photo` VARCHAR(255) DEFAULT NULL,
    `status` VARCHAR(10) DEFAULT NULL,
    `note` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;*/

// Data Source Name
$dsn = 'mysql:host=localhost;dbname=businesscards;charset=utf8';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);

    //Hiba mód: Exception dobása hiba esetén
    $pdo->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Sikeres csatlakozás";
    //xss
    //xss($pdo);

    //sql_injection($pdo);
    //prepared_statement($pdo); //védekezés sql injection ellen
    checked_insert($pdo);//minden mezohoz adjunk meg egy stringet és ezt sql injection ellen védve és xsstol vedve adjuk hozza az adatbazishoz

} catch (PDOException $ex) {
    echo "Kapcsolódási hiba: {$ex->getMessage()}.";
    exit();
}


function xss($pdo){
    // INSERT
    $name = "pumpal";
    $companyName = htmlspecialchars("<script>alert(\"hacked\")</script>");
    $phone = "1241243";
    $email = "pumpal@mzsrk.hu";
    $photo = null;
    //$status =?;
    $note = "webfejlesztő";

    $sql = "INSERT INTO cards(`name`, `companyName`, `phone`, `email`, `photo`, `note`) VALUES ('$name', '$companyName', '$phone', '$email', '$photo', '$note')";
    $pdo->exec($sql);

    // READ
    $sql = "SELECT * FROM cards WHERE name = 'pumpal'";
    $result = $pdo->query($sql);
    $card=$result->fetch(PDO::FETCH_ASSOC);
    echo "<br>";
    print_r($card);
}

function sql_injection($pdo){
    $name_i = "' OR '1' = '1"; // támadó kód
    $sql = "SELECT * FROM cards WHERE name = '$name_i'";
    $result = $pdo->query($sql);
    $card=$result->fetchAll(PDO::FETCH_ASSOC);
    echo "<br>";
    print_r($card);
}

function prepared_statement($pdo){
    $name_i = "' OR '1' = '1"; // támadó kód
    $sql = "SELECT * FROM cards WHERE name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$name_i]);

    $card= $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<br>";
    print_r($card);

    /*$sql = "INSERT INTO cards(`name`, `companyName`, `phone`, `email`, `photo`, `note`) VALUES ('name', '$companyName', '$phone', '$email', '$photo', '$note')";
    $pdo->exec($sql);

    // READ
    $sql = "SELECT * FROM cards WHERE name = 'pumpal'";
    $result = $pdo->query($sql);
    $card=$result->fetch(PDO::FETCH_ASSOC);
    echo "<br>";
    print_r($card);*/
}

function checked_insert($pdo){
    
    $name = htmlspecialchars("valami");
    $companyName = htmlspecialchars("amerika");
    $phone = htmlspecialchars("06307539397");
    $email = htmlspecialchars("valami@amerika.com");
    $photo = null;
    $status = null;
    $note = htmlspecialchars("sziatesominmdenokescsa");


    $sql = "INSERT INTO cards(`name`, `companyName`, `phone`, `email`, `photo`, `note`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$name, $companyName, $phone, $email, $photo, $note]);
}

?>