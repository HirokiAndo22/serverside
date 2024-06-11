<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-3</title>
    </head>
    <body>
        <?php
        function fnc($i)
        {
            echo "<p>{$i}の値を引数で受け渡しました</p>";
        }
        fnc(1);
        fnc(2);
        fnc("PHP");
        
        ?>
    </body>
</html>