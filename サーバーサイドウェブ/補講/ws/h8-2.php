<?php
$year = $_GET["year"];
$month = $_GET["month"];
$day = $_GET["day"]
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>h8-2</title>
    </head>
    <body>
        <?php
        $timestamp = mktime(0,0,0,$month,$day,$year);
       $y = date("Y",$timestamp);
       $m = date("m",$timestamp);
       $d = date("d",$timestamp);
       $w = date("w",$timestamp);
       $h = date("H",$timestamp);
       $i = date("i",$timestamp);
       $s = date("s",$timestamp);
       //曜日を日本語化
       $week = array("日","月","火","水","木","金","土");
       echo "{$y}年{$m}月{$d}日は、{$week[$w]}曜日です";
        ?>
    </body>
</html>