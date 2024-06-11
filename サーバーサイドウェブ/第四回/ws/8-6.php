<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-6</title>
    </head>
    <body>
        <?php
        $item = 1;
        function fnc()
        {
           $item = 2;
        }
        fnc();
        echo($item);
        ?>
    </body>
</html>