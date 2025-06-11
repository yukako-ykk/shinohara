<?php

function connectDB() {
    $dsn = 'mysql:host=mysql305.phy.lolipop.lan;
                dbname=LAA1553915-tododb;charset=utf8';
    $username = 'LAA1553915';
    $password = 'shinohara';

    $pdo = new PDO($dsn, $username, $password);
    return $pdo;
}

function connectDB_local() {
    $dsn = 'mysql:host=localhost;
    dbname=tododb;charset=utf8';
    $username = 'root';
    $password = 'root';

    $pdo = new PDO($dsn, $username, $password);
    return $pdo;
}

?>  
