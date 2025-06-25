<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>タスク編集</h1>
    <?php $pdo=connectDB();?>
    <form action="create.php" method="post">
    内容:<input type="text" value="task"><br>
    期限:<input type="date" value="due_date"><br>
    優先度:
    <select value="priority">
        <option value="low">低</option>
        <option value="medium">中</option>
        <option value="high">高</option>
    </select><br>
    状態
    <select value="status">
        <option value="todo">未着手</option>
        <option value="in_progress">進行中</option>
        <option value="done">完了</option>
    </select><br>
    <button type="submit">保存</button>
    </form>
    <a href="todos.php">キャンセル</a>
    
</body>
</html>