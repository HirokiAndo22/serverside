<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>h7-2</title>
    </head>
    <body>
        <?php
        $line[9];
        $column[9];
        $result[9][9];
        $length = 15;
        function math($a,$b){
            return $a*$b;
        }
        //初期化
        for($i=1;$i<=9;$i++){
            $line[$i-1] = $i;
            $column[$i-1] = $i;
        }
        //計算
        for($i = 0;$i<9;$i++){
            for($j =0;$j<9;$j++){
                $result[$i][$j] = math($line[$i],$column[$j]);
            }
        }
        //表示
        for($i = 0;$i<9;$i++){
            for($j =0;$j<9;$j++){
                echo sprintf("%{$length}d",$result[$i][$j]);
            }
            echo "<br/>";
        }
        ?>
    </body>
</html>