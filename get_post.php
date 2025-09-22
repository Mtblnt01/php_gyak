<?php
    /*if (($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["name"]) && ($_POST["name"])!=""){
        //itt dolgozom fel az űrlapot
        $name = $_POST["name"] ?? "ismeretlen";

        $password = $_POST["password"] ?? "";
        echo "Hello, $name ($password)";
    }

    if (($_SERVER["REQUEST_METHOD"] === "GET") && isset($_GET["name"]) && ($_GET["name"])!=""){
        //itt dolgozom fel az űrlapot
        $name = htmlspecialchars($_GET["name"] ?? "ismeretlen");
        $password = $_GET["password"] ?? "";
        echo "Hello, $name";
    }*/

    //Ha GET és POST is lehet
    if (isset($_REQUEST["name"])){
        $name = htmlspecialchars($_GET["name"] ?? "ismeretlen");
        $password = $_GET["password"] ?? "";
        echo "Hello, $name ($password)";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>űrlapkezelés</h1>
    
    <p> <a href="?name=admin">Kattints ide az üdvözlésért admin!</a> </p>
    
    <form action="" method="get">
        <label for="name">Név:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="password">Jelszó:</label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit">Küld</button>
    </form>
</body>
</html>

