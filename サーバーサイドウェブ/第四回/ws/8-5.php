<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-5</title>
    </head>
    <body>
        <?php
        function fnc($n1,$n2,$n3)
        {
           $result=$n1+$n2+$n3;
           return $result;
        }
        ?>
        <p>結果は<?= fnc(5,6,7);?></p>
    </body>
</html>