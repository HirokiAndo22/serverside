<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>7-2</title>
    </head>

    <body>
        <?php
            $case1[0] = "鉛筆";
            $case1[1] = "消しゴム";
            $case1[2] = "ボールペン";
            
            echo "<p>最初は{$case1[1]}</p>";

            $case2 = array("鉛筆","消しゴム","ボールペン");
            echo "<p>最初は{$case2[2]}</p>";

        ?>
    </body>
</html>