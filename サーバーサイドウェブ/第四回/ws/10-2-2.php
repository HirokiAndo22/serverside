<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>10-2-2</title>
    </head>
    <body>
        <?php
        $timestamp = mktime(12,20,54,10,3,2025);
       $y = date("Y",$timestamp);
       $m = date("m",$timestamp);
       $d = date("d",$timestamp);
       $w = date("w",$timestamp);
       $h = date("H",$timestamp);
       $i = date("i",$timestamp);
       $s = date("s",$timestamp);
       //曜日を日本語化
       $week = array("日","月","火","水","木","金","土");
       echo "{$y}年{$m}月{$d}日{$h}時{$i}分{$s}秒は、{$week[$w]}曜日です";
        ?>
    </body>
</html>