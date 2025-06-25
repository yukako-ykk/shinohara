<?php
require_once 'connectDB.php';
$pdo = connectDB();
if(isset($_POST['add'])){
    $sql = $pdo->prepare('INSERT INTO todos ( task,due_date , priority) VALUES (?,?,?)');
    $sql->execute([$_POST['task'], $_POST['date'], $_POST['priority']]);
    $pdo = null;
    header('Location: todo.php');
    exit;
}
if (isset($_POST['edit'])) {
    $sql = $pdo->prepare('UPDATE todos SET
                            task = ?, due_date = ?,priority = ?
                            WHERE user_id = ?');
    if (!($sql->execute([$_POST['task'], $_POST['date'],$_POST['priority']]))) {
        header('Location: todo.php');
        exit;
    }
}
if (isset($_POST['dele'])) {
    $user_id = $_POST['id'];
    $sql = $pdo->prepare('DELETE FROM todos WHERE user_id = ?');
    $sql->execute([$user_id]);
    header('Location: todo.php');
    exit;
}
?>