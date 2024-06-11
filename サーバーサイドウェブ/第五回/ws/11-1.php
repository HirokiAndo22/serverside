<!DOCTYPE>
<html>
    <head>
        <meta charset="uft-8">
        <title>11-1</title>
    </head>

    <body>
    <?php

    $target_dir = dirname(__FILE__);
    $target_file = $target_dir . "/file11-1.txt";

    file_put_contents($target_file , "表示される文字列はこれです");

    $str = file_get_contents($target_file);
    echo"読み出した文字列:{$str}";
    ?>
    </body>
</html>

