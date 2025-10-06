<?php 

// Belépési pont


// Controller

// Egyszerű autoloader a kód betöltéséhez a mappaszerkezet alapján.
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use App\Models\BusinessCard;
use App\Services\CardManager;
//use PDO;

//Adatbázis konfig (.env)
$dbHost = 'localhost';
$dbName = 'business_cards';
$dbUser = 'root';
$dbPass = '';
try {
    $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Sikeres adatbázis-kapcsolat.\n";
} catch (PDOException $ex) {
    die("Hiba az adatbáziskapcsolatban: " . $ex->getMessage());
}

$sql = "
    CREATE TABLE IF NOT EXISTS business_cards (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(100) NOT NULL,
        company VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

    ) ENGINE = InnoDB DEFAULT CHARSET=utf8;";



?>