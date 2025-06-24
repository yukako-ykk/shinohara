<?php session_start(); ?>
<h2>ログイン</h2>
<form action="login_process2.php" method="post">
    ユーザー名：<input type="text" name="username"><br>
    パスワード：<input type="password" name="password"><br>
    <button type="submit">ログイン</button>
</form>
<a href="register2.php">新規登録</a>