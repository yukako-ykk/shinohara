<?php
$pdo=connectDB();
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $stmt = $pdo->prepare("DELETE FROM todos WHERE id = ?");
    if ($stmt->execute([$id])) {
        echo "削除しました。";
    } else {
        echo "削除に失敗しました。";
    }
} 
?>