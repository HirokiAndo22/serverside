<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-7</title>
    </head>
    <body>
        <?php
        $item = 1;
        function fnc()
        {
           $GLOBALS["item"] = 2;
        }
        fnc();
        echo($item);
        ?>
    </body>
</html>