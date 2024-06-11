<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-4</title>
    </head>
    <body>
        <?php
        function fnc($i = 3) 
        {
            echo "<p>{$i}の値を引数で受け渡しました</p>";
        }
        fnc(1);
        fnc(2);
        fnc();
        
        ?>
    </body>
</html>