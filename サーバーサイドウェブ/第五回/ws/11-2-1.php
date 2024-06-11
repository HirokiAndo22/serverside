<!DOCTYPE>
<html>
    <head>
        <meta charset="uft-8">
        <title>11-2-1</title>
    </head>
    <body>
    <?php
    $save_file = dirname(__FILE__)."/file11-2.txt";//ファイル名で指定
    $master_password = "board";

    //　if(isset($_POST("~"))　：　 条件式でラベルを受け付けるif文　
    if(isset($_POST["msg"])){
        /*「条件？処理1:処理2；  :  三項演算子。条件がtrueなら処理1、falseなら処理2 */
        $pass = isset($_POST["pass"]) ? $_POST["pass"] : ""; 
        if($pass !== $master_password){
            echo "パスワードを確認してください";
            exit;
        }
        file_put_contents($save_file,$_POST["msg"]);
        echo "保存しました!!";
    }else{
        $self = $_SERVER["SCRIPT_NAME"];
        echo <<< __FORM__
        <!-- 投稿フォーム -->
        <form method= "POST" action="{$self}">
            <textarea name = "msg" cols = 60" rows = "6">
                ここにメッセージを記入してください。
            </textarea><br>
            パスワード: <input type="password" name="pass">
            <input type="submit" value = "記録">
        </form>
        __FORM__;
    }
?>
    </body>
</html>

