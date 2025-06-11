<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="tasuku">
        <h2>タスク追加</h2>
        <input type="text" name="naiyou">
        <input type="datetime" name="kare">
        <select name="user_pref">
            <?php
            $prefectures = [
                "優先度(低)",
                "中",
                "高"
            ]
            ?>
            <input type="button" name="tui" value="追加">
    </form>
    <form action="" name="kensaku">
    <input class="search_bar" type="text" name="keyword" placeholder="キーワード">
    <?php
            $prefectures = [
                "優先度(全)",
                "低",
                "中",
                "高"
            ]
            ?>
    </form>
    
    <?php
    
    ?>
    
















































</body>
</html>