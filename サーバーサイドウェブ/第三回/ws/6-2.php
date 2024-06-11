<?php
    $data = $_GET["data"];
    $data = mb_convert_kana($data,"KVa");
    $data *= 1;
    if($data < 50){
        $str = "低い";
    }elseif( $data > 50){
        $str = "高い";
    }else{
        $str = "正解";
    }
?>

<!DOCTYPE>
<html>
    <head>
    <meta charset="utf-8">
    <title>6-2</title>
    </head>
    <body>
        <p>あなたは<?= $str;?></p>
    </body>
</html>