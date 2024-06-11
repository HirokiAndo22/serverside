<?php
    session_start();
    if($_SESSION["id"] === session_id()){
        $msg = "<p>同一人認証</p>";
    }else{
        $msg = "<p>拒否</p>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>12-3-1</title>
    </head>
    <body>
        <h1>同一人認証結果②</h1>
        <p><?=$msg?></p>
        <p>毎回session_id()を取得し、同じなら同一人</p>
    </body>
</html>