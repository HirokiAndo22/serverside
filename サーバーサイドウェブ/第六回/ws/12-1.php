<?php
if(isset($_COOKIE["visited"])){
    $count = $_COOKIE["visited"] + 1;
}else{
    $count = 1;
}
setcookie("visited", $count);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-1.php</title>
    </head>
    <body>
        <h1>アクセスカウンタ</h1>
        <?= "<p>訪問回数は{$count}回目です。</p>"?>
        <p>ブラウザ毎、ユーザー個人が何回訪れたかのデータです。</p>
    </body>
    </html>