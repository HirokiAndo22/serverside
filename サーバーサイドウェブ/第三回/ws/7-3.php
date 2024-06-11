<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>7-2</title>
    </head>

    <body>
        <?php
           $fruits1["banana"] = "yellow";
           $fruits1["peach"] = "pink";
           $fruits1["apple"] = "red";

           $fruits2 = array(
            'banana' => 'yellow',
            'peach'=> 'pink',
            'apple'=> 'red'
           );

            
            echo "<p>最初は{$fruits1['banana']}</p>";

            echo "<p>最初は{$fruits2['apple']}</p>";

        ?>
    </body>
</html>