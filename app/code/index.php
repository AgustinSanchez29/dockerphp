<?php

try {
    //phpinfo();
    echo "<br>";
    $pdo = new PDO('mysql:host=mysql;dbname=world;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
