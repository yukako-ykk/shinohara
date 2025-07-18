<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'connectDB.php';
    $pdo = connectDB();
    ?>
    <h1>TODOリスト</h1>
    <!-- <form action="header.php" method="post">
        <h2>タスク追加</h2>
        <input type="text" name="task" placeholder="タスク内容">
        <input type="date" name="date">
        <select name="priority">
        <option value="低">優先度(低)</option>
        <option value="中">中</option>
        <option value="高">高</option>
        </select>
            <input type="submit" name="add" value="追加">
    </form> -->

    <form action="header.php" method="post">
  <input type="text" name="task" placeholder="タスク内容" required>
  <input type="date" name="date" required>
  <select name="priority" required>
    <option value="低">優先度(低)</option>
    <option value="中">中</option>
    <option value="高">高</option>
  </select>
  <input type="submit" name="add" value="追加">
</form>

    <h2>フィルタ/検索</h2>
    <form action="todo.php" method="post">
        <input class="search_bar" type="text" name="keyword" placeholder="キーワード">
        <select name="filter">
        <option value="すべて">すべて</option>
        <option value=""></option>
        <option value=""></option>
        </select>
        <select name="priority">
        <option value="すべて">優先度(すべて)</option>
        <option value="低">低</option>
        <option value="中">中</option>
        <option value="高">高</option>
        </select>
        <input type="submit" name="search" value="適用">
    </form>
    
    <?php
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $sql = $pdo->prepare('SELECT * FROM todos WHERE user_id = ?');
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
            echo '<td>', $priority['due_date'], '</td>';
            echo '<td>', $priority['priority'], '</td>';
            echo '<td> <a href="header.php name="edit">編集</a> </td>';
            echo '<td> <a href="header.php" name="dele">削除</a> </td>';
            echo '</tr>';
        }
    }
    ?>
    
















































</body>
</html>