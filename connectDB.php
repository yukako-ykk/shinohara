<?php
function connectDB() {
    $dsn = 'mysql:host=mysql320.phy.lolipop.lan;dbname=LAA1553915-tododb;charset=utf8';
    $username = 'LAA1553915';
    $password = 'shinohara';

    $pdo = new PDO($dsn, $username, $password);
    return $pdo;
}
