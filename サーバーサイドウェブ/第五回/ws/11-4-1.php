<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <title>11-4-1</title>
    </head>

    <body>
        <h1>気象庁天気データ</h1>
        <pre>
            <?php
                $url = "https://www.jma.go.jp/bosai/forecast/data/forecast/110000.json";
                $json = file_get_contents($url, true);
                $json = json_decode($json,true);

                print_r($json);
            ?>
            
        </pre>
    </body>
</html>