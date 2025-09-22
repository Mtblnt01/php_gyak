<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER szuperglobalis</title>
</head>
<body>
    <h2>SERVER tömb információi</h2>
    <ul>
        <li>
            <strong>Kérés módja: </strong>
            <?php echo $_SERVER['REQUEST_METHOD'];?>
        </li>
        <li>
            <strong>Kérés URL: </strong>
            <?php echo $_SERVER['REQUEST_URI'];?>
        </li>

        <!-- Script neve: PHP_SELF -->
        <!-- QUERY string: QUERY_STRING vagy "nincs -->
        <li>
            <strong>PHP_SELF</strong>
            <?php echo $_SERVER['PHP_SELF']?>
        </li>
        <li>
            <strong>QUERY_STRING</strong>
            <?php 
                if ($_SERVER['QUERY_STRING'] !== ''){
                    echo $_SERVER['QUERY_STRING'];
                } else {echo 'nincs';}
                //echo empty($_SERVER['QUERY_STRING']) ? "Nincs":$_SERVER['QUERY_STRING'];
            ?>
        </li>
    </ul>

    <p>
        <!-- IF -->
        <!-- paraméterek -->
        <ul>
            <li>
                <?php
                    $csa = explode("&", $_SERVER['QUERY_STRING'])
                    echo dates[0];
                ?>
            </li>
        </ul>
    </p>

    <h3>Szerver adatai</h3>
    <!-- Szerver neve: SERVER_NAME -->
    <?php echo empty($_SERVER['SERVER_NAME']) ? "Nincs":$_SERVER['SERVER_NAME'];?>
    <!-- Szerver IP címe: SERVER_ADDR -->
    <?php echo empty($_SERVER['SERVER_ADDR']) ? "Nincs":$_SERVER['SERVER_ADDR'];?>


    <h3>Felhasználó adatai</h3>
    <!-- Böngésző adatai: -->
    <!-- Felhasználó IP címe: -->

    <p>
        <a href="<?php echo $_SERVER['PHP_SELF'];?>?name=matbal&age=18">Kattints egy paraméterezett GET kéréshez</a>
    </p>
</body>
</html>