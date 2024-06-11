<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-2-2</title>
    </head>
    <body>
        <h1>データの保持②</h1>
        <p>名前：<?= $_SESSION["name"]?></p>
        <p>住所：<?= $_SESSION["address"]?></p>
    </body>
</html>