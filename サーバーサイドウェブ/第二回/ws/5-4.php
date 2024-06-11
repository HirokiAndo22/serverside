<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>5-4</title>
    </head>

    <body>
        <p>
            <?php
            $data = "中島";

            $content = <<< EOT
<h1>本講座について</h1>
<p>本講座の講師は{$data}です。
EOT;

            echo $content;
            ?>
        </p>
    </body>
</html>