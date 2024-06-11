<?php
 $data = $_GET["data"];
 $data = htmlspecialchars($data);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>8-8</title>
    </head>
    <body>
        <?php echo "あなたは{$data}を送信しました！"; ?>
        
    </body>
</html>
