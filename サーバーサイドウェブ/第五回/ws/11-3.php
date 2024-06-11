<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <title>11-3</title>
    </head>

    <body>
        <h1>掲示板</h1>
    <?php
        $save_file = dirname(__FILE__)."/file11-3.txt";
        $mode = isset($_GET["mode"]) ? $_GET["mode"] : "show";

        switch($mode){
            case "show":mode_show();break;
            case "write":mode_write();break;
            default : mode_show();break;
        }

        function mode_show(){
            show_form();
            $log = load_data();

            echo"<ul>";
            foreach($log as $i){
                $name = htmlspecialchars($i["name"]);
                $body = htmlspecialchars($i["body"]);
                echo "<li><b style= 'color:red;'>$name</b> : $body</li>\n";
            }
            echo "</ul>";
        }

        function show_form(){
            echo <<< __FORM__
            <form>
                ◾️名前： <input type="text" name= "name" size="8">
                本文:<input tyoe="text" name="body" size="30">
                <input type = "submit" value="書く">
                <input type = "hidden" name="mode" value="write">
            </form>
            <hr>
            __FORM__;
        }

        function mode_write(){
            if($_GET["name"] === "" || $_GET["body"] == ""){
                echo"名前か本文がからです。入力してください";
                exit;
            }

            $log = load_data();
            array_unshift($log,$_GET);

            save_data($log);
            $self = $_SERVER['SCRIPT_NAME'];
            echo "<a href = '{$self}'>書き込みました!!</a>";
        }

        function load_data(){
            global $sava_file;
            $log = array();
            if(file_exists($sava_file)){
                $txt = file_get_contents($sava_file);
                $log = unserialize($txt);
            }
            return $log;
        }

        function save_data($log){
            global $save_file;
            $txt = serialize($log);
            file_put_contents($save_file,$txt);
        }
    ?>
    </body>
</html>