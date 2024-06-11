<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>7-2</title>
    </head>

    <body>
        <?php
            $map = array([1,1,1],
                         [1,0,1],
                         [1,1,1]);
            for($i =0;$i<3;$i++){
                for($j=0;$j<3;$j++){
                    echo"{$map[$i][$j]}";
                }
                echo"<p>";
            }
        ?>
    </body>
</html>