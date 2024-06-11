<!DOCTYPE>
<html>
    <head>
        <meta charset="uft-8">
        <title>11-2-2</title>
    </head>

    <body>
        <h1>本日の一言</h1>
    <?php
        $save_file = dirname(__FILE__)."/file11-2.txt";

        if(!file_exists($save_file)){
            echo"まだメッセージはありません";
            exit;
        }

        $msg = file_get_contents($save_file);
        $msg_html = htmlspecialchars($msg);
        $msg_html = str_replace("\n","<br>",$msg_html);

        echo <<< __HTML__
        <div style="border: dashed 3px red; padding:12px;">
            <div style = "font-size:26px; color:blue;">
                {$msg_html}
            </div>
        </div>

        __HTML__;
    ?>
    </body>
</html>