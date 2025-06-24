<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TODOリスト</h1>
    <form action="header.php" name="task">
        <h2>タスク追加</h2>
        <input type="text" name="task">
        <input type="datetime" name="cale">
        <select name="priority">
            <?php
            $prioritys = [
                "優先度(低)",
                "中",
                "高"
            ]
            ?>
            <input type="button" name="add" value="追加">
    </form>
    <h2>フィルタア/検索</h2>
    <form action="todo.php" name="search">
        <input class="search_bar" type="text" name="keyword" placeholder="キーワード">
        <select name="filter">
        <?php
            $filter = [
                "すべて",
                "",
                "",
                ""
            ]
            ?>
        <select name="priority">
        <?php
            $prioritys = [
                "優先度(全)",
                "低",
                "中",
                "高"
            ]
            ?>
        <input type="button" name="search" value="適用">
    </form>
    
    <?php
    require_once 'function.php';
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $pdo = pdo();
        $sql = $pdo->prepare('SELECT * FROM users WHERE user_id = ?');
        $sql->execute([$user_id]);
        $product = $sql->fetch(PDO::FETCH_ASSOC);
    

        echo '<table border="1"><tr>';
        echo '<th>状態</th>';
        echo '<th>タスク</th>';
        echo '<th>期限</th>';
        echo '<th>優先度</th>';
        echo '<th>操作</th>';
        echo '</tr>';
        foreach ($prioritys as $priority) {
            echo '<tr>';
            echo '<td><input type="checkbox" name="agree"></td>';
            echo '<td>', $priority['task'], '</td>';
            echo '<td>', $priority['status ENUM'], '</td>';
            echo '<td>', $priority['priority TINYINT'], '</td>';
            echo '<td> <a href="header.php name="edit">編集</a> </td>';
            echo '<td> <a href="header.php" name="dele">削除</a> </td>';
            echo '</tr>';
        }
    }
    ?>
    
















































</body>
</html>