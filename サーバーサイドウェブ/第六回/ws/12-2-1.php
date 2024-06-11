<?php
    session_start();
    $_SESSION["name"]="あんどう";
    $_SESSION["address"]="かわごえ";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-2-1.php</title>
    </head>
    <body>
        <h1>データの保持①</h1>
        <p>名前：<?= $_SESSION["name"]?></p>
        <p>住所：<?= $_SESSION["address"]?></p>
        <p><a href="12-2-2.php">次のページへ</a></p>
    </body>
    </html>