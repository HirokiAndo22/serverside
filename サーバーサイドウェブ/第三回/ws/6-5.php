<?php
    $data = $_GET["data"];
    $data = mb_convert_kana($data,"KVa");
    $data *= 1;
    $total = 0;
    for($i =0;$i<=$data;$i++){
        $total += $i;
    }
?>

<!DOCTYPE>
<html>
    <head>
    <meta charset="utf-8">
    <title>6-2</title>
    </head>
    <body>
        <p>0から<?= $data?>まで足した合計は
        <?= $total ?>です
    </body>
</html>