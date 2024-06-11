<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>7-2</title>
    </head>

    <body>
        <?php
            $case = array("鉛筆","消しゴム","ボールペン");
            $count = count($case);
            echo"<p>{$count}番目は{$case[2]}</p>";
            $case[] = "定規";
            $count = count($case);
            echo "<p>{$count}番目は{$case[3]}</p>";

        ?>
    </body>
</html>