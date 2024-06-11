<?php
$height = $_GET["height"];
$weight = $_GET["weight"];
$BMI = floor($weight / pow($height/100,2) * 100) / 100;
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>h7-1</title>
    </head>
    <body>
        <p>
            身長:<?php echo($height)?>cm <p>
            体重:<?php echo($weight)?>kg <p>
            あなたのBMI : <?php echo($BMI)?>
        </p>
    </body>
</html>
