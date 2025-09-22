<?php
session_start();
$_SESSION['page_views'] = ($_SESSION['page_views'] ?? 0) +1;
echo "Eddigi megnyitások száma: " . $_SESSION['page_views'] . "<br>";
?>

