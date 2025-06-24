<?php
session_start();
require_once 'connectDB.php';
$pdo = connectDB();

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->execute([$username, $password]);
$user = $stmt->fetch();

if ($user) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
} else {
    echo "ログイン失敗";
}
?>