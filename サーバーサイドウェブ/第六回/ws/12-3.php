<?php
    session_start();
    $_SESSION["id"] = session_id();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-2-3</title>
    </head>
    <body>
        <h1>同一認証①</h1>
        <form action="12-3-1.php">
            <p>名前：<input type="text" name="name"></p>
            <p>パスワード：<input type="text" name="pw"></p>
            <p><input type="submit" value="送信"></p>
        </form>
    </body>
</html>