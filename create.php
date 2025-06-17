<?php
$pdo=connectDB();
$task= $_POST['task'];
$due_date =$_POST['due_date'];
$priority =$_POST['priority'];
$status =$_POST['status'];

    $stmt = $pdo->prepare("INSERT INTO todos (task,due_date,priority,status) VALUES (?, ?, ?, ?)");
     $stmt->execute([$task, $due_date, $priority, $status]);
     return header("Location: todos.php");
?>