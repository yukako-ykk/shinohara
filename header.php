<?php
if(isset($_POST['add'])){
    $sql = $pdo->prepare('INSERT INTO users ( task, status ENUM, priority TINYINT) VALUES (?,?,?)');
    $sql->execute([$_POST['task'], $_POST['cale'], $_POST['priority']]);
    $pdo = null;
}
if (isset($_POST['edit'])) {
    $sql = $pdo->prepare('UPDATE users SET
                            task = ?, status ENUM = ?,priority TINYINT = ?
                            WHERE user_id = ?');
    if (!($sql->execute([$_POST['task'], $_POST['status ENUM'],$_POST['priority TINYINT']]))) {
        header('Location: todo.php');
        exit;
    }
}
if (isset($_POST['dele'])) {
    $user_id = $_POST['id'];
    $sql = $pdo->prepare('DELETE FROM users WHERE user_id = ?');
    $sql->execute([$user_id]);
    header('Location: todo.php');
    exit;
}
?>