<?php
session_start(); // ← セッションスタートを必ず
require_once 'connectDB.php';
$pdo = connectDB();
 
if(isset($_POST['add'])){
    $user_id = $_SESSION['user_id']; // ログイン時に保存しているはず
    $sql = $pdo->prepare('INSERT INTO todos (task, due_date, priority, user_id) VALUES (?, ?, ?, ?)');
    $sql->execute([$_POST['task'], $_POST['date'], $_POST['priority'], $user_id]);
    $pdo = null;
    header('Location: todo.php');
    exit;
}
 
if (isset($_POST['edit'])) {
    $user_id = $_SESSION['user_id']; // これもセッションから取得するように修正
    $sql = $pdo->prepare('UPDATE todos SET task = ?, due_date = ?, priority = ? WHERE user_id = ?');
    $sql->execute([$_POST['task'], $_POST['date'], $_POST['priority'], $user_id]);
    header('Location: todo.php');
    exit;
}
 
if (isset($_POST['dele'])) {
    $user_id = $_SESSION['user_id'];
    $sql = $pdo->prepare('DELETE FROM todos WHERE user_id = ?');
    $sql->execute([$user_id]);
    header('Location: todo.php');
    exit;
}
?>


<?php
// require_once 'connectDB.php';
// $pdo = connectDB();
// if(isset($_POST['add'])){
//     $sql = $pdo->prepare('INSERT INTO todos ( task,due_date , priority) VALUES (?,?,?)');
//     $sql->execute([$_POST['task'], $_POST['date'], $_POST['priority']]);
//     $pdo = null;
//     header('Location: todo.php');
//     exit;
// }
// if (isset($_POST['edit'])) {
//     $sql = $pdo->prepare('UPDATE todos SET
//                             task = ?, due_date = ?,priority = ?
//                             WHERE user_id = ?');
//     if (!($sql->execute([$_POST['task'], $_POST['date'],$_POST['priority']]))) {
//         header('Location: todo.php');
//         exit;
//     }
// }
// if (isset($_POST['dele'])) {
//     $user_id = $_POST['id'];
//     $sql = $pdo->prepare('DELETE FROM todos WHERE user_id = ?');
//     $sql->execute([$user_id]);
//     header('Location: todo.php');
//     exit;
// }
?> 