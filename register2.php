<?php session_start(); ?>
<h2>ユーザー登録</h2>
<form action="register_process2.php" method="post">
    ユーザー名：<input type="text" name="username"><br>
    パスワード：<input type="password" name="password"><br>
    <button type="submit">登録</button>
</form>
<a href="login.php">ログイン画面へ</a>