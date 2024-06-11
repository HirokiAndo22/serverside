<?php
$rand = rand(1,5);
$text;
switch($rand){
case 1:
    $GLOBALS["text"] = "大吉";
    break;
case 2:
    $GLOBALS["text"] = "中吉";
    break;
case 3:
    $GLOBALS["text"] = "小吉";
    break;
case 4:
    $GLOBALS["text"] = "吉";
    break;
case 5:
    $GLOBALS["text"] = "末吉";
    break;        
default:
    $GLOBALS["text"] = "ボタンを押してください";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-8</title>
    </head>

    <body>
        <h1>おみくじ</h1>
        <form method="get" action="h8-1.php">
            <p>ボタンを押してください
                <input type="submit" value="引く">
            </p>
            <?php
            echo $text;
            ?>
        </form>
    </body>
</html>