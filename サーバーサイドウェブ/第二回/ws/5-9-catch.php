<?php 
$dataA= $_GET["dataA"];
$dataB= $_GET["dataB"];
$symbol = $_GET["symbol"];
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>出力</title>
    </head>

    <body>
        <p>
            <?php
            //$result = $dataA + $dataB;
            switch("$symbol"){
                case"+":
                    $result = $dataA + $dataB;
                    break;
                case "-":
                    $result = $dataA - $dataB;
                    break;
                case "*":
                    $result = $dataA * $dataB;
                    break;
                case "/":
                    $result = $dataA / $dataB;
                    break;
                case "%":
                    $result = $dataA % $dataB;
                    break;
            }
            echo $result;
            ?>
        </p>
    </body>
</html>