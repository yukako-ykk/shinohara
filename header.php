<?php
if (isset($_POST['edit'])) {
        $user_id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
       
        $sql = $pdo->prepare('UPDATE users SET
                                username = ?, password = ?, created_at = ?
                                WHERE user_id = ?');
        if (!($sql->execute([$name, $price, $stock, $option, $category, $explain, $made, $seller, $id]))) {
            header('Location: admin_top.php');
            exit;
        }
    header('Location: todo.php');
    exit;
}
if (isset($_POST['dele'])) {
    $user_id = $_POST['id'];
    $sql = $pdo->prepare('DELETE FROM users WHERE user_id = ?');
    $sql->execute([$user_id]);
    header('Location: todo.php');
    exit;
}
?>