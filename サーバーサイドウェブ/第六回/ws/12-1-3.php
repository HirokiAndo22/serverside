<?php
$name = $_COOKIE["name"];
$address = $_COOKIE["address"];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-1-3</title>
    </head>
    <body>
        <h1>データの保存③</h1>
        <p>データをクッキーから取り出す</p>
        <p>名前は<?= $name ?></p>
        <p>住所は<?= $address ?></p>
    </body>
</html>