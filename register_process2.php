<?php
require_once 'connectDB.php';
$pdo = connectDB();

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->execute([$username, $password]);

header("Location: login2.php");

?>