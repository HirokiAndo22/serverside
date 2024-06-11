<?php
    $url = "https://www.jma.go.jp/bosai/forecast/data/forecast/110000.json";
    $json = file_get_contents($url, true);
    $json = json_decode($json,true);

    $publishingOffice = $json[0]['$publishingOffice'];
    $reportDatetime = $json[0]['$reportDatetime'];

    $timeDefines = $json[0]['timeSeries'][0]['timeDefines'];
    $areas = $json[0]['timeSeries'][0]['areas'][0];
    $area =  $areas['area']['name'];
    $weather = $areas['$weather'];
    $wind = $$areas['wind'];

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <title>11-4-2</title>
    </head>

    <body>
        <h1>気象庁天気データ</h1>
        <h1>発表：<?= $publishingOffice;?></h1>
        <h2>時間：<?= $reportDatetime;?></h2>
        <h2>エリア：<?=$area;?></h2>
        <ul>
    <?php
        for($i =0;$i<3;$i++){
            echo<<<EOM
            <li>
            時間：{$timeDefines[$i]}<br>
            天気概況：{$weather[$i]}<br>
            風：{$wind[$i]}
            </li>
            EOM;
        }
        ?>
    </body>
</html>