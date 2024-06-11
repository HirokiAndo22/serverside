<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>10-2-1</title>
    </head>
    <body>
        <?php
       date_default_timezone_set('Asia/Tokyo');
       $y = date("Y");
       $m = date("m");
       $d = date("d");
       $w = date("w");
       $h = date("H");
       $i = date("i");
       $s = date("s");
       //曜日を日本語化
       $week = array("日","月","火","水","木","金","土");
       $w = $week[$w];
        ?>
        <p>
            <?=$y ?>年<?=$m ?>月<?=$d ?>日(<?=$w ?>曜)<?=$h ?>時<?=$i ?>分<?=$s ?>秒
        </p>
        <p>
            <?php
            echo date("日時：Y年m月d日 H時i分s秒");
            ?>
        </p>
    </body>
</html>