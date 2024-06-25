<?php
    session_start();
    $data = $_GET["data"];
    $data = mb_convert_kana($data,"KVa");
    $data *= 1;
    if(isset($_COOKIE["rand"])){
        $rand = $_COOKIE["rand"];
    }else
    {
        $rand = rand(1,10);
        setcookie("rand",$rand);
    }

    function judge(){
        $data = $GLOBALS["data"];
        $rand = $GLOBALS['rand'];
        if($data < $rand){
            echo"あなたは低い <br />";
            echo"<a href=\"12-4.php\">入力へ戻る</a>";
        }elseif( $data > $rand){
            echo"あなたは高い <br />";
            echo"<a href=\"12-4.php\">入力へ戻る</a>";
        }else{
            echo"正解の数字は{$rand}です。<br />";
            echo"あなたは等しい <br />";
            $rand = rand(1,10);
            setcookie("rand",$rand);
            echo"<a href=\"12-4.php\">リセットして始める</a>";
        }
    }
?>

<!DOCTYPE>
<html>
    <head>
    <meta charset="utf-8">
    <title>12-4-1</title>
    </head>
    <body>
        <?=
        judge();
        ?>
    </body>
</html>