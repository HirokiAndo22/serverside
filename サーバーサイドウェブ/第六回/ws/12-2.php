<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-2.php</title>
    </head>
    <body>
        <h1>デフォルトのセッション</h1>
        <?= session_name()?> = <?= session_id()?>
    </body>
</html>